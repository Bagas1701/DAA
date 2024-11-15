<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuRestoransTable extends Migration
{
    public function up()
    {
        Schema::create('menu_restorans', function (Blueprint $table) {
            $table->id(); // Kolom id utama
            $table->string('nama_menu'); // Nama menu
            $table->text('deskripsi')->nullable(); // Deskripsi menu
            $table->decimal('harga', 10, 2); // Harga menu
            $table->enum('kategori', ['Makanan', 'Minuman', 'Desert']); // Kategori menu
            $table->enum('status', ['tersedia', 'habis'])->default('tersedia'); // Kolom status menu
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_restorans');
    }
}
