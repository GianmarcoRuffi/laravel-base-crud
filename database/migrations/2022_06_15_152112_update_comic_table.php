<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateComicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('comic_table', function (Blueprint $table) {
        //     //
        // });

        
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->text('description');
            $table->string('image');
            $table->float('price', 5, 2);
            $table->string('series', 150);
            $table->date('sale_date');
            $table->string('type', 100);
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
        // Schema::table('comic_table', function (Blueprint $table) {
        //     //
        // });
        Schema::dropIfExists('comic');

    }
}
