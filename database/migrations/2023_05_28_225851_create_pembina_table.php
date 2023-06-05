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
        Schema::create('pembina', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('nama_pembina', 225)->nullable;
            $table->string('ttl', 225)->nullable;
            $table->string('alamat', 225)->nullable;
            $table->string('no_hp', 15)->nullable;
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
        Schema::dropIfExists('pembina');
    }
};
