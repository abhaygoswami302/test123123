<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collection_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subseries_id');
            $table->string('name');
            $table->string('series');
            $table->string('category_name');
            $table->string('subseries_name');            
            $table->string('theme');
            $table->string('casting_name');  
            $table->string('year');  
            $table->string('colour');
            $table->string('tampo')->nullable();
            $table->string('decoration')->nullable();
            $table->string('base_color')->nullable();
            $table->string('type');
            $table->string('window_color')->nullable();
            $table->string('interior_color')->nullable();
            $table->string('wheel_type')->nullable();
            $table->string('country')->nullable();
            $table->text('notes')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
