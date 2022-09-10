<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class Produk extends Model{

    use ProdukAttributes, ProdukRelations;
    
    protected $table = 'produk';
    public $primaryKey = 'id';


    protected $casts = [
        'created_at' => 'datetime',
        'berat' => 'decimal:2'

    ];

    
}