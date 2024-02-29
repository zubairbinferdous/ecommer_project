<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ProductName');
            $table->integer('Product_id');
            $table->integer('Regular_price');
            $table->string('ProductUrl');
            $table->string('ProductImages');
            $table->longText('ProductShortDescription');
            $table->string('SeoTitle');
            $table->string('SeoImages');
            $table->longText('SeoDescription');
            $table->longText('description');
            $table->integer('Category_id');
            $table->integer('PlacementInShop');
            $table->string('ProductStatus');
            $table->string('ProductSchedule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
