<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('collection_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subseries_id')->nullable();
            $table->string('theme_id')->nullable();
            $table->string('name');
            $table->string('series')->nullable();
            $table->string('category_name');
            $table->string('collection_name')->nullable();
            $table->string('subseries_name');            
            $table->string('theme');
            $table->string('model_name');
            $table->string('casting_name')->nullable();  
            $table->string('year');  
            $table->string('colour');
            $table->string('tampo')->nullable();
            $table->string('decoration')->nullable();
            $table->string('base_colour')->nullable();
            $table->string('type')->nullable();
            $table->string('window_colour')->nullable();
            $table->string('interior_colour')->nullable();
            $table->string('wheel_type')->nullable();
            $table->string('visibility')->default('0');
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
        Schema::dropIfExists('temporaries');
    }
}
