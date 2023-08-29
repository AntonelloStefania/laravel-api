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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            //devices
            $table->boolean('mobile');
            $table->boolean('tablet');
            $table->boolean('pc');
            $table->boolean('smart_tv');
            //end-devices
            //OS
            $table->boolean('windows');
            $table->boolean('linux');
            $table->boolean('mac');
            $table->boolean('android');
            $table->boolean('ios');
            //end-OS
            //Age-restriction
            $table->boolean('age_restriction');
            //end-Age-restriction


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
        Schema::dropIfExists('types');
    }
};
