<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pages')->nullable();
            $table->string('book_section')->nullable();
            $table->string('author')->nullable();
            $table->string('editor')->nullable();
            $table->string('translator')->nullable();
            $table->string('english')->nullable();
            $table->string('gujarati')->nullable();
            $table->string('hindi')->nullable();
            $table->string('urdu')->nullable();
            $table->string('arabic')->nullable();
            $table->string('book_cover')->nullable();
            $table->string('book_pdf')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('books');
    }
}
