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
        Schema::create('addlisences', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('sof');
            $table->string('address');
            $table->string('dob');
            $table->string('bg');
            $table->string('cat');
            $table->string('vf');
            $table->string('vt');

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
        Schema::dropIfExists('addlisences');
    }
};
