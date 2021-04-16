<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            $table->text('name_nr')->nullable();
            $table->text('remarks')->nullable();
            $table->text('link')->nullable();
            $table->text('description')->nullable();
            $table->text('description_nr')->nullable();
            $table->text('cover')->nullable();
            $table->text('featured')->nullable();
            $table->text('date')->nullable();
            $table->text('sort_order')->nullable();
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
        Schema::dropIfExists('news');
    }
}
