<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('featuredimg', 40)->nullable();
            $table->string('title', 40);
            $table->string('sub1', 40);
            $table->longText('para1');

            $table->string('sub2', 40)->nullable();
            $table->longText('para2')->nullable();

            $table->string('sub3', 40)->nullable();
            $table->longText('para3')->nullable();

            $table->string('sub4', 40)->nullable();
            $table->longText('para4')->nullable();

            $table->string('sub5', 40)->nullable();
            $table->longText('para5')->nullable();

            $table->string('sub6', 40)->nullable();
            $table->longText('para6')->nullable();

            $table->string('sub7', 40)->nullable();
            $table->longText('para7')->nullable();

            $table->string('sub8', 40)->nullable();
            $table->longText('para8')->nullable();

            $table->string('sub9', 40)->nullable();
            $table->longText('para9')->nullable();

            $table->string('sub10', 40)->nullable();
            $table->longText('para10')->nullable();

            $table->string('sub11', 40)->nullable();
            $table->longText('para11')->nullable();

            $table->string('sub12', 40)->nullable();
            $table->longText('para12')->nullable();

            $table->string('sub13', 40)->nullable();
            $table->longText('para13')->nullable();

            $table->string('sub14', 40)->nullable();
            $table->longText('para14')->nullable();

            $table->string('sub15', 40)->nullable();
            $table->longText('para15')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
