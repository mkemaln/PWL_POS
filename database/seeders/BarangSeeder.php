<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => '00TW',
                'barang_nama' => 'Tango Wafer',
                'harga_beli' => 3000,
                'harga_jual' => 5000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => '00LM',
                'barang_nama' => 'Le Mineral',
                'harga_beli' => 1500,
                'harga_jual' => 300
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => '00ST',
                'barang_nama' => 'Stimuno',
                'harga_beli' => 19000,
                'harga_jual' => 27000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => '00EC',
                'barang_nama' => 'Enervon C',
                'harga_beli' => 3000,
                'harga_jual' => 5500
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => '00LP',
                'barang_nama' => 'Lipstic',
                'harga_beli' => 16000,
                'harga_jual' => 25000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => '00SLS',
                'barang_nama' => 'Sunsilk Shampoo',
                'harga_beli' => 14000,
                'harga_jual' => 20000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => '00TER',
                'barang_nama' => 'T-Shirt Erigo',
                'harga_beli' => 90000,
                'harga_jual' => 150000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => '00SW3S',
                'barang_nama' => 'Sweater 3 Second',
                'harga_beli' => 110000,
                'harga_jual' => 240000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => '00VCOPCH',
                'barang_nama' => 'VOOC OPPO Charger',
                'harga_beli' => 90000,
                'harga_jual' => 210000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => '00MTBQ',
                'barang_nama' => 'Monitor Benq',
                'harga_beli' => 160000,
                'harga_jual' => 310000
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
