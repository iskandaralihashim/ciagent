<?php

namespace App\Controllers;

use App\Models\ItemModel;

class Item extends BaseController
{
    protected $itemModel;

    public function __construct()
    {
        $this->itemModel = new ItemModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Items',
            'show_title' => true,
            'items' => $this->itemModel->findAll(),
        ];
        return view('items/index', $data);
    }

    public function create(): string
    {
        $data = [
            'title' => 'Add New Item',
            'show_title' => true,
        ];
        return view('items/create', $data);
    }

    public function store(): \CodeIgniter\HTTP\RedirectResponse
    {
        if (!$this->validate($this->itemModel->validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->itemModel->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ]);

        return redirect()->to(base_url('/items'))->with('success', 'Item added successfully!');
    }

    public function show($id = null): string
    {
        $item = $this->itemModel->find($id);

        if (!$item) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => 'View Item',
            'show_title' => true,
            'item' => $item,
        ];
        return view('items/show', $data);
    }

    public function edit($id = null): string
    {
        $item = $this->itemModel->find($id);

        if (!$item) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => 'Edit Item',
            'show_title' => true,
            'item' => $item,
        ];
        return view('items/edit', $data);
    }

    public function update($id = null): \CodeIgniter\HTTP\RedirectResponse
    {
        $item = $this->itemModel->find($id);

        if (!$item) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        if (!$this->validate($this->itemModel->validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->itemModel->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ]);

        return redirect()->to(base_url('/items/' . $id))->with('success', 'Item updated successfully!');
    }

    public function delete($id = null): \CodeIgniter\HTTP\RedirectResponse
    {
        $item = $this->itemModel->find($id);

        if (!$item) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->itemModel->delete($id);

        return redirect()->to(base_url('/items'))->with('success', 'Item deleted successfully!');
    }
}
