<?php

namespace App\Controllers\Api;

use App\Models\ItemModel;
use CodeIgniter\RESTful\ResourceController;

class Item extends ResourceController
{
    protected $modelName = 'App\Models\ItemModel';
    protected $format    = 'json';

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        }

        return $this->failNotFound('No item found with id ' . $id);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'name' => 'required',
        ];

        if (! $this->validate($rules)) {
            return $this->fail($this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
        ];

        $id = $this->model->insert($data);
        $data['id'] = $id;

        return $this->respondCreated($data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
        ];

        $this->model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Item updated successfully'
            ]
        ];
        return $this->respond($response);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            $this->model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Item successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }

        return $this->failNotFound('No item found with id ' . $id);
    }
}
