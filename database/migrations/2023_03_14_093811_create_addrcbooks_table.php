<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addrcbooks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rto');
            $table->string('model');
            $table->string('class');
            $table->string('fuel');
            $table->string('eno');
            $table->string('cno');
            $table->string('regdate');
            $table->string('fit');
            $table->string('expiry');
            $table->string('expin');
            $table->string('regnumber');
            $table->string('color');
            $table->string('unload');
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
        Schema::dropIfExists('addrcbooks');
    }
};
