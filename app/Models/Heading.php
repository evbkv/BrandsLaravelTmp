<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heading extends Model
{
    use HasFactory;
    protected $table = 'headings';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name',
        'top_heading_id'
    ];
}
