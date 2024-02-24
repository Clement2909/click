<?php

namespace App\Models;

use CodeIgniter\Model;

class ShoeModel extends Model
{
    protected $table = 'chaussures'; // Nom de la table des chaussures
    protected $primaryKey = 'id'; // Clé primaire de la table
    protected $allowedFields = ['nom', 'marque_id', 'type_id', 'description']; // Champs autorisés à être modifiés

    // Relation avec la marque de la chaussure
    public function brand()
    {
        return $this->belongsTo('App\Models\BrandModel', 'marque_id', 'id');
    }

    // Relation avec le type de la chaussure
    public function type()
    {
        return $this->belongsTo('App\Models\TypeModel', 'type_id', 'id');
    }

    // Relation avec les stocks de la chaussure
    public function stocks()
    {
        return $this->hasMany('App\Models\StockModel', 'chaussure_id', 'id');
    }

    // Relation avec les images de la chaussure
    public function images()
    {
        return $this->hasMany('App\Models\ImageModel', 'chaussure_id', 'id');
    }
}
