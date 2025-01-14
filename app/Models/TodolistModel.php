<?php

namespace App\Models;

use CodeIgniter\Model;

class TodolistModel extends Model
{
    protected $table            = 'todos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true; // Enable soft deletes
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'description', 'status', 'start_time', 'duration'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [
        'start_time' => 'datetime',
        'duration'   => 'integer',
    ];

    // Timestamps
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation rules
    protected $validationRules = [
        'title'       => 'required|min_length[3]|max_length[255]',
        'description' => 'permit_empty|string|max_length[1000]',
        'status'      => 'required|in_list[pending,completed]',
        'start_time'  => 'permit_empty|valid_date[Y-m-d H:i:s]',
        'duration'    => 'permit_empty|integer|greater_than_equal_to[0]',
    ];

    protected $validationMessages = [
        'title' => [
            'required'    => 'The title is required.',
            'min_length'  => 'The title must be at least 3 characters long.',
            'max_length'  => 'The title cannot exceed 255 characters.',
        ],
        'status' => [
            'required' => 'The status is required.',
            'in_list'  => 'The status must be either "pending" or "completed".',
        ],
        'start_time' => [
            'valid_date' => 'The start time must be a valid datetime in the format Y-m-d H:i:s.',
        ],
        'duration' => [
            'integer' => 'The duration must be a valid integer.',
            'greater_than_equal_to' => 'The duration must be 0 or more.',
        ],
    ];

    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
