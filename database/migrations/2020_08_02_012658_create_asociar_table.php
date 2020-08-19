<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsociarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asociar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('server_name');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('server_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('server_id')->references('id')->on('servidores');
            $table->foreign('user_name')->references('name')->on('users');
            $table->foreign('server_name')->references('name')->on('servidores');
            $table->softDeletes();
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
        Schema::dropIfExists('asociar');
    }
}
