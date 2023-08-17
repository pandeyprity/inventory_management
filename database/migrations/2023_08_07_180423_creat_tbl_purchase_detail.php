<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_purchase_detail', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('purchase_id');
            $table->foreign('purchase_id')->references('id')->on('tbl_purchase_mstr');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('tbl_item_mstr');
            $table->string('qty');
            $table->string('price');
            $table->string('total_amount');
            $table->boolean("status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('tbl_purchase_detail');
    }
};
