<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');                                         
            $table->string('name')->nullable();
            $table->string('collection_name')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
            $table->string('image8')->nullable();
            $table->string('image9')->nullable();
            $table->string('image10')->nullable();
            $table->string('image11')->nullable();
            $table->string('image12')->nullable();
            $table->string('image13')->nullable();
            $table->string('image14')->nullable();
            $table->string('image15')->nullable();
            $table->string('image16')->nullable();
            $table->string('image17')->nullable();
            $table->string('image18')->nullable();
            $table->string('image19')->nullable();
            $table->string('image20')->nullable();
            $table->string('image21')->nullable();
            $table->string('image22')->nullable();
            $table->string('image23')->nullable();
            $table->string('image24')->nullable();
            $table->string('image25')->nullable();
            $table->string('image26')->nullable();
            $table->string('image27')->nullable();
            $table->string('image28')->nullable();
            $table->string('image29')->nullable();
            $table->string('image30')->nullable();
            $table->string('image31')->nullable();
            $table->string('image32')->nullable();
            $table->string('image33')->nullable();
            $table->string('image34')->nullable();
            $table->string('image35')->nullable();
            $table->string('image36')->nullable();
            $table->string('image37')->nullable();
            $table->string('image38')->nullable();
            $table->string('image39')->nullable();
            $table->string('image40')->nullable();
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
        Schema::dropIfExists('product_images');
    }
}
