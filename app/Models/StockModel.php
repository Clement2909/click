<?php

namespace App\Models;

use CodeIgniter\Model;

class StockModel extends Model
{
    protected $table = 'stocks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['chaussure_id', 'couleur_id', 'pointure_id', 'quantite'];
}
