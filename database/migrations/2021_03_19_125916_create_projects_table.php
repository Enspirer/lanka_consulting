<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('name_nr')->nullable();
            $table->text('cover');
            $table->text('location')->nullable();
            $table->text('location_nr')->nullable();
            $table->text('year')->nullable();
            $table->text('client')->nullable();
            $table->text('type')->nullable();
            $table->text('type_nr')->nullable();
            $table->text('worth')->nullable();
            $table->text('worth_nr')->nullable();
            $table->text('In_numbers')->nullable();
            $table->text('In_numbers_nr')->nullable();
            $table->text('scope')->nullable();
            $table->text('scope_nr')->nullable();
            $table->text('description')->nullable();
            $table->text('description_nr')->nullable();
            $table->text('status')->nullable();
            $table->text('status_nr')->nullable();
            $table->text('sort_order');
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
        Schema::dropIfExists('projects');
    }
}
