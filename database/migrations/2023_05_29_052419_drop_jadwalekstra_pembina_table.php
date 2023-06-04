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
        if (Schema::hasColumn('pembina', 'jadwalekstra_id')) {
            Schema::table('pembina', function (Blueprint $table) {
                $table->dropForeign(['jadwalekstra_id']);
                $table->dropColumn('jadwalekstra_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembina', function (Blueprint $table) {
            $table->unsignedBigInteger('jadwalekstra_id')->nullable();
            $table->foreign('jadwalekstra_id')->references('id')->on('jadwalekstra');
        });
    }
};
