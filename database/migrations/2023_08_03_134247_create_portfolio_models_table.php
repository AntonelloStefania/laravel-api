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
        Schema::create('portfolio_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('front_ender')->nullable();
            $table->string('back_ender');
            $table->string('ui')->nullable();
            $table->string('ux')->nullable();
            $table->string('illustrator')->nullable();
            $table->string('image');
            $table->text('description');
            $table->text('link')->nullable();
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
        Schema::dropIfExists('portfolio_models');
    }
};
