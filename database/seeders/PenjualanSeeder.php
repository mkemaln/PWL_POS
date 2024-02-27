<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'PM1',
                'penjualan_kode' => '001',
                'penjualan_tanggal' => date('Y-m-d H:i:s')
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'PM2',
                'penjualan_kode' => '002',
                'penjualan_tanggal' => date('Y-m-d H:i:s')
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'PM3',
                'penjualan_kode' => '003',
                'penjualan_tanggal' => date('Y-m-d H:i:s')
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'PM4',
                'penjualan_kode' => '004',
                'penjualan_tanggal' => date('Y-m-d H:i:s')
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'PM5',
                'penjualan_kode' => '005',
                'penjualan_tanggal' => date('Y-m-d H:i:s')
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'PM6',
                'penjualan_kode' => '006',
                'penjualan_tanggal' => date('Y-m-d H:i:s')
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'PM7',
                'penjualan_kode' => '007',
                'penjualan_tanggal' => date('Y-m-d H:i:s')
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'PM8',
                'penjualan_kode' => '008',
                'penjualan_tanggal' => date('Y-m-d H:i:s')
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'PM9',
                'penjualan_kode' => '009',
                'penjualan_tanggal' => date('Y-m-d H:i:s')
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'PM10',
                'penjualan_kode' => '0010',
                'penjualan_tanggal' => date('Y-m-d H:i:s')
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
