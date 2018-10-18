<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_mahasiswas', function (Blueprint $table) {
            $table->increments('id');//membuat kolom id auto increment
			$table->String('nama');//membuat kolom nama
			$table->String('email');//membuat kolom email
			$table->String('no hp');//membuat kolom no hp
			$table->text('alamat');//membuat kolom alamat dengan tipe text
            $table->timestamps();//membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_mahasiswas');
    }
}
