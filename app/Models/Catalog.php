<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $table = 'catalog';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'brand_id',
        'heading_id'
    ];
}
