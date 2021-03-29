<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // any columns not null
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // primary key bigint
            $table->timestamps(); // 2 columns date 1- create_at 2- updated_at
            $table->string("title");
            $table->string("name");
            $table->string("body")->nullable();
            $table->integer("version")->default(50);
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
