<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['name', 'description', 'price'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        'description' => 'permit_empty|string',
        'price' => 'required|decimal',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Item name is required.',
            'min_length' => 'Item name must be at least 3 characters long.',
            'max_length' => 'Item name cannot exceed 255 characters.',
        ],
        'price' => [
            'required' => 'Price is required.',
            'decimal' => 'Price must be a valid decimal number.',
        ],
    ];

    protected $skipValidation = false;
}
