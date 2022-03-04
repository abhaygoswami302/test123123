<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCsvClassSeriesHashAndFiveImageFieldsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('series_hash')->after('col_hash')->nullable();
            $table->string('class')->after('country')->nullable();
            $table->renameColumn('image', 'image1');
            $table->string('image5')->after('image')->nullable();
            $table->string('image4')->after('image')->nullable();
            $table->string('image3')->after('image')->nullable();
            $table->string('image2')->after('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
