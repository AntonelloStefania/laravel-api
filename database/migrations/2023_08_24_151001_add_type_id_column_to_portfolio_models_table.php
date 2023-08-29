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
        Schema::table('portfolio_models', function (Blueprint $table) {
            //nuova colonna
            $table->unsignedBigInteger('type_id')->nullable()->after('id');

            //vincolo foreign key
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolio_models', function (Blueprint $table) {
            $table->dropForeign('portfolio_models_type_id_foreign');

            $table->dropColumn('type_id');
        });
    }
};
