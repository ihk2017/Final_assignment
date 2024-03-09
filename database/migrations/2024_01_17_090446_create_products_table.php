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

            $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('producttype_id');

            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            // $table->foreign('category_id')->references('id')->on('categories')
            //     ->cascadeOnUpdate()->restrictOnDelete();
            
                $table->foreign('Producttype_id')->references('id')->on('producttypes')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->string('name',255)->nullable();
            $table->string('description',200)->nullable();
            $table->string('price',50)->nullable();
            $table->string('unit',50)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        
            $table->index('name');
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
