<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_detail extends Model
{
    use HasFactory;
    protected $table = "tbl_purchase_detail";
    protected $fillable = [
        'name',
        'purchase_id',
        'item_id',
        'qty',
        "price",
        "total_amount",
        "status"
    ];

    protected $attributes = [
        'status' => true, // Set the default value for the 'status' column
    ];

    public function purchase()
    {
        return $this->belongsTo(Purchase::class, 'purchase_id');
    }

    public function purchase_detail()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
