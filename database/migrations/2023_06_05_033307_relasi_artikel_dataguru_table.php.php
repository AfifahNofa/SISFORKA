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
        if (Schema::hasColumn('artikel', 'guru_id')){
            Schema::dropColumns('artikel', 'guru_id');
        }
        Schema::table('artikel', function (Blueprint $table) {
            $table->unsignedBigInteger('guru_id')->nullable(); //menambahkan kolom guru_id
            $table->foreign('guru_id')->references('id')->on('guru');//menambahkan foreign key di kolom guru_id
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artikel', function (Blueprint $table) {
            $table->string('guru');
            $table->dropForeign(['guru_id']);
        });
    }
};
