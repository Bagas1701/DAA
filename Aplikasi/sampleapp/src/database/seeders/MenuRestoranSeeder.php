<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuRestoran;

class MenuRestoranSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data kategori Makanan
        MenuRestoran::create([
            'nama_menu' => 'Nasi Goreng Spesial',
            'deskripsi' => 'Nasi goreng dengan ayam, telur, dan sayuran segar.',
            'harga' => 25000.00,
            'kategori' => 'Makanan',
            'status' => 'tersedia',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Mie Goreng Jawa',
            'deskripsi' => 'Mie goreng khas Jawa dengan ayam dan sayuran.',
            'harga' => 20000.00,
            'kategori' => 'Makanan',
            'status' => 'tersedia',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Ayam Penyet Sambal',
            'deskripsi' => 'Ayam goreng dengan sambal pedas dan nasi putih.',
            'harga' => 30000.00,
            'kategori' => 'Makanan',
            'status' => 'habis',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Sate Ayam Madura',
            'deskripsi' => 'Sate ayam dengan bumbu kacang khas Madura.',
            'harga' => 25000.00,
            'kategori' => 'Makanan',
            'status' => 'tersedia',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Soto Ayam',
            'deskripsi' => 'Soto ayam dengan kuah bening dan pelengkap.',
            'harga' => 22000.00,
            'kategori' => 'Makanan',
            'status' => 'habis',
        ]);

        // Menambahkan data kategori Minuman
        MenuRestoran::create([
            'nama_menu' => 'Es Teh Manis',
            'deskripsi' => 'Teh manis dingin segar yang cocok untuk teman makan.',
            'harga' => 5000.00,
            'kategori' => 'Minuman',
            'status' => 'tersedia',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Jus Alpukat',
            'deskripsi' => 'Jus alpukat segar dengan topping coklat.',
            'harga' => 15000.00,
            'kategori' => 'Minuman',
            'status' => 'habis',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Es Jeruk',
            'deskripsi' => 'Minuman jeruk segar dengan rasa asam manis.',
            'harga' => 7000.00,
            'kategori' => 'Minuman',
            'status' => 'tersedia',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Kopi Hitam',
            'deskripsi' => 'Kopi hitam tanpa gula, cocok untuk penyuka kopi murni.',
            'harga' => 10000.00,
            'kategori' => 'Minuman',
            'status' => 'habis',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Es Kelapa Muda',
            'deskripsi' => 'Air kelapa muda dengan es, segar dan menyehatkan.',
            'harga' => 12000.00,
            'kategori' => 'Minuman',
            'status' => 'tersedia',
        ]);

        // Menambahkan data kategori Desert
        MenuRestoran::create([
            'nama_menu' => 'Kue Coklat Lava',
            'deskripsi' => 'Kue coklat panas dengan isian cairan coklat di dalamnya.',
            'harga' => 18000.00,
            'kategori' => 'Desert',
            'status' => 'tersedia',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Es Krim Vanila',
            'deskripsi' => 'Es krim rasa vanila yang lembut dan manis.',
            'harga' => 12000.00,
            'kategori' => 'Desert',
            'status' => 'habis',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Puding Coklat',
            'deskripsi' => 'Puding coklat lembut dengan saus vanila.',
            'harga' => 10000.00,
            'kategori' => 'Desert',
            'status' => 'tersedia',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Brownies Panggang',
            'deskripsi' => 'Brownies panggang lembut dengan kacang almond.',
            'harga' => 20000.00,
            'kategori' => 'Desert',
            'status' => 'habis',
        ]);

        MenuRestoran::create([
            'nama_menu' => 'Cheesecake',
            'deskripsi' => 'Cheesecake klasik dengan rasa manis dan lembut.',
            'harga' => 25000.00,
            'kategori' => 'Desert',
            'status' => 'tersedia',
        ]);
    }
}
