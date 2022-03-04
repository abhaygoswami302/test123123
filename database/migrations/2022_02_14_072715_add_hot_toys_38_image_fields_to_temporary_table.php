<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHotToys38ImageFieldsToTemporaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temporaries', function (Blueprint $table) {
            $table->string('image38')->after('image5')->nullable();
            $table->string('image37')->after('image5')->nullable();
            $table->string('image36')->after('image5')->nullable();
            $table->string('image35')->after('image5')->nullable();
            $table->string('image34')->after('image5')->nullable();
            $table->string('image33')->after('image5')->nullable();
            $table->string('image32')->after('image5')->nullable();
            $table->string('image31')->after('image5')->nullable();
            $table->string('image30')->after('image5')->nullable();
            $table->string('image29')->after('image5')->nullable();
            $table->string('image28')->after('image5')->nullable();
            $table->string('image27')->after('image5')->nullable();
            $table->string('image26')->after('image5')->nullable();
            $table->string('image25')->after('image5')->nullable();
            $table->string('image24')->after('image5')->nullable();
            $table->string('image23')->after('image5')->nullable();
            $table->string('image22')->after('image5')->nullable();
            $table->string('image21')->after('image5')->nullable();
            $table->string('image20')->after('image5')->nullable();
            $table->string('image19')->after('image5')->nullable();
            $table->string('image18')->after('image5')->nullable();
            $table->string('image17')->after('image5')->nullable();
            $table->string('image16')->after('image5')->nullable();
            $table->string('image15')->after('image5')->nullable();
            $table->string('image14')->after('image5')->nullable();
            $table->string('image13')->after('image5')->nullable();
            $table->string('image12')->after('image5')->nullable();
            $table->string('image11')->after('image5')->nullable();
            $table->string('image10')->after('image5')->nullable();
            $table->string('image9')->after('image5')->nullable();
            $table->string('image8')->after('image5')->nullable();
            $table->string('image7')->after('image5')->nullable();
            $table->string('image6')->after('image5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temporaries', function (Blueprint $table) {
            //
        });
    }
}
