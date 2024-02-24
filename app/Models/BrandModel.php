<?php

namespace App\Models;

use CodeIgniter\Model;

class BrandModel extends Model
{
    protected $table = 'marques';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom'];
}
