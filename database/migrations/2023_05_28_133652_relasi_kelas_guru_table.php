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
        if (Schema::hasColumn('siswa', 'guru_id')){
            Schema::dropColumns('siswa', 'guru_id');
        }
        Schema::table('siswa', function (Blueprint $table) {
            $table->unsignedBigInteger('guru_id')->nullable(); //menambahkan kolom kelas_id
            $table->foreign('guru_id')->references('id')->on('guru');//menambahkan foreign key di kolom kelas_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->string('guru');
            $table->dropForeign(['guuru_id']);
        });
    }
};
