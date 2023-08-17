<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = "tbl_item_mstr";
    protected $fillable = [
        'name',
        'code',
        'price',
        'description',
        "brand_id"
    ];

    protected $attributes = [
        'status' => true, // Set the default value for the 'status' column
    ];

    public function userType()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
