<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('hoten');
            $table->date('namsinh');
            $table->string('gioitinh');
            $table->string('diachi');
            $table->integer('phongban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
