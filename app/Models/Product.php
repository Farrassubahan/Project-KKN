<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'foto',
        'harga',
        'deskripsi',
        'link_ecommerce',
    ];
}
