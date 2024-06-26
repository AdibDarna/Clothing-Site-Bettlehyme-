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
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->string('nama_produk', 255)->nullable();
            $table->char('stok', 255)->nullable();
            $table->string('warna', 255)->nullable();
            $table->string('XXL', 255)->nullable();
            $table->string('XL', 255)->nullable();
            $table->string('L', 255)->nullable();
            $table->string('M', 255)->nullable();
            $table->string('S', 255)->nullable();
            $table->string('kategori', 255)->nullable();
            $table->string('harga', 255)->nullable();
            $table->string('deskripsi', 255)->nullable();
            $table->string('wave', 255)->nullable();
            $table->string('gambar', 255)->nullable();
            $table->string('gambar_sertif', 255)->nullable();
            $table->string('sertifikat', 255)->nullable();
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
        Schema::dropIfExists('produk');
    }
};
