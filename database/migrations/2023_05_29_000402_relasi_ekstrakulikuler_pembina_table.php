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
        if (Schema::hasColumn('pembina', 'ekstrakulikuler_id')){
            Schema::dropColumns('pembina', 'ekstrakulikuler_id');
        }
        Schema::table('pembina', function (Blueprint $table) {
            $table->unsignedBigInteger('ekstrakulikuler_id')->nullable(); //menambahkan kolom ekstrakulikuler_id
            $table->foreign('ekstrakulikuler_id')->references('id')->on('ekstrakulikuler');//menambahkan foreign key di kolom ekstrakulikuler_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembina', function (Blueprint $table) {
            $table->string('ekstrakulikuler');
            $table->dropForeign(['ekstrakulikuler_id']);
        });
    }
};
