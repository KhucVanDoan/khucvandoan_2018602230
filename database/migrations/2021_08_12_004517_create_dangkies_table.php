<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDangkiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dangkies', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('monhoc_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('monhoc_id')->references('id')->on('monhocs');
            $table->primary(['user_id','monhoc_id']);
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
        Schema::dropIfExists('dangkies');
    }
}
