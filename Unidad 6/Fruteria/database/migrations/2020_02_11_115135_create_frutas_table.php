<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrutasTable extends Migration
{

    public function up()
    {
        Schema::create('frutas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('description',255);
            $table->float('precio');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('frutas');
    }
}
