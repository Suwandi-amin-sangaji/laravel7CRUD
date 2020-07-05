<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            // cara pertama untuk membuat relasi table di Perintah PHP laravel
            $table->foreignId('edulevels_id')->constrained('edulevels')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name',100);
            $table->integer('student_price')->nullabel();
            $table->tinyInteger('student_max')->nullable();
            $table->text('info')->nullable();
            $table->timestamps();
        });
        // cara kedua untuk membuat relasi table di Perintah PHP laravel
        // Schema::table('posts', function (Blueprint $table) {
        //     $table->foreign('edulevels_id')->references('id')->on('edulevels')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
