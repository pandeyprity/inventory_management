<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = "tbl_brand_mstr";
    protected $fillable = [
        'name',
        'code',
        'description',
        'status',
    ];


}
