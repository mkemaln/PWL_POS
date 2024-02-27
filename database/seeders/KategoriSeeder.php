<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'FNB',
                'kategori_nama' => 'Food and Beverages'
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'HLT',
                'kategori_nama' => 'Health Product'
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'CST',
                'kategori_nama' => 'Cosmetic'
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'FSH',
                'kategori_nama' => 'Fashion'
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'TCH',
                'kategori_nama' => 'Technology'
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
