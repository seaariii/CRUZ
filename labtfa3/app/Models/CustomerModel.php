<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table            = 'customers';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['full_name', 'email']; // <--- MUST MATCH FORM NAMES
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}