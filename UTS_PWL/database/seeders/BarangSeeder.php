<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Oppo', 'harga_beli' => 1000000, 'harga_jual' => 1500000],
            ['barang_id' => 2, 'kategori_id' => 2, 'barang_kode' => 'BRG002', 'barang_nama' => 'Lenovo Thinkplus', 'harga_beli' => 50000, 'harga_jual' => 130000],
            ['barang_id' => 3, 'kategori_id' => 3, 'barang_kode' => 'BRG003', 'barang_nama' => 'Vivan', 'harga_beli' => 80000, 'harga_jual' => 150000],
            ['barang_id' => 4, 'kategori_id' => 4, 'barang_kode' => 'BRG004', 'barang_nama' => 'HP Victus', 'harga_beli' => 7000000, 'harga_jual' => 8500000],
            ['barang_id' => 5, 'kategori_id' => 5, 'barang_kode' => 'BRG005', 'barang_nama' => 'Fantech', 'harga_beli' => 75000, 'harga_jual' => 100000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
