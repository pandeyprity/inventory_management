<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $table = "tbl_purchase_mstr";
    protected $fillable = [
        'name',
        'mobile_no',
        'date',
        'invoice_no',
        "grand_total",
        "status"
    ];

    protected $attributes = [
        'status' => true, // Set the default value for the 'status' column
    ];

   
}
