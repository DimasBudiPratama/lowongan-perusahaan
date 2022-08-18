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
        Schema::create('lamars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelamar_id');
            $table->foreignId('post_id');
            $table->string('berkas');
            $table->string('waktu')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('pelamar_id')->references('id')->on('pelamars')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lamars');
    }
};
