<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class Product extends Model{

    use ProdukAttributes, ProdukRelations;
    
    protected $table = 'product';
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $casts = [
        'created_at' => 'datetime',
        'berat' => 'decimal:2'

    ];

    protected static function boot(){
        parent::boot();

        static::creating(function($item){
            $item->uuid = (string) Str::uuid();
        });
    }

    
}