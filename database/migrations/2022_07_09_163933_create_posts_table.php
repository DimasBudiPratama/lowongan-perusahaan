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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->foreignId('pendidikan_id');
            $table->string('title');
            $table->string('lowongan');
            $table->string('slug')->unique();
            $table->string('sampul')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->text('keterangan');
            $table->string('gaji')->nullable();
            $table->date('mulai')->nullable();
            $table->date('selesai')->nullable();
            $table->integer('status')->nullable();
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
