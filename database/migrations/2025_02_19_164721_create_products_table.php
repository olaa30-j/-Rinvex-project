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
        if (!Schema::hasTable('products')) {  
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name'); 
                $table->text('description')->nullable();
                $table->decimal('price', 10, 2)->default(0.00);  
                $table->unsignedBigInteger('category_id'); 
                $table->integer('stock_quantity')->default(0);    
                $table->string('image_url')->nullable();
                $table->timestamps();
    

                    Schema::table('products', function (Blueprint $table) {
                        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
                    });
        });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
