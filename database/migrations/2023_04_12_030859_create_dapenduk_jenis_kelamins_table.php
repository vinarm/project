<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDapendukJenisKelaminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dapenduk_jenis_kelamins', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_kelamin', ['Perempuan', 'Laki-laki']);
            $table->string('jumlah', 50)->nullable();;
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
        Schema::dropIfExists('dapenduk_jenis_kelamins');
    }
}
