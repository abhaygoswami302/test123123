<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageDescriptionToCastingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('castings', function (Blueprint $table) {
            $table->string('image')->nullable()->after('casting_name');
            $table->longText('description')->nullable()->after('casting_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('castings', function (Blueprint $table) {
            //
        });
    }
}
