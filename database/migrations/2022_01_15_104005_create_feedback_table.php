<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('collection_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subseries_id')->nullable();
            $table->text('name')->nullable();
            $table->text('series')->nullable();
            $table->text('category_name')->nullable();
            $table->text('collection_name')->nullable();	
            $table->text('subseries_name')->nullable();
            $table->text('theme')->nullable();	
            $table->text('theme_id')->nullable();	
            $table->text('model_name')->nullable();	
            $table->text('casting_name')->nullable();	
            $table->text('year')->nullable();
            $table->text('colour')->nullable();	
            $table->text('tampo')->nullable();	
            $table->text('decoration')->nullable();	
            $table->text('base_colour')->nullable();	
            $table->text('type')->nullable();	
            $table->text('window_colour')->nullable();	
            $table->text('interior_colour')->nullable();	
            $table->text('wheel_type')->nullable();	
            $table->text('visibility')->nullable();
            $table->text('country')->nullable();	
            $table->text('class')->nullable();	
            $table->text('col_hash')->nullable();	
            $table->text('series_hash')->nullable();	
            $table->text('toy_hash')->nullable(); 
            $table->text('notes')->nullable();	
            $table->text('image1')->nullable();	
            $table->text('image2')->nullable();	
            $table->text('image3')->nullable();	
            $table->text('image4')->nullable();
            $table->text('image5')->nullable();
            $table->text('important_note')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('feedback');
    }
}
