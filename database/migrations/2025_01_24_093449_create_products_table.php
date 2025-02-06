<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Foreign key to categories table
            $table->string('brandName');
            $table->decimal('price', 10, 2);
            $table->decimal('salePrice', 10, 2)->nullable();
            $table->integer('stock');
            $table->text('specifications')->nullable();
            $table->text('description');
            $table->json('productImages');
            $table->string('productVideo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
