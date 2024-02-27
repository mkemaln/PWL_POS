<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        $penjualan_id = 1; 
        $detail_id = 1;

        for ($j = 0; $j < 10; $j++) {
            for ($i = 0; $i < 3; $i++) {
                $data[] = [
                    'detail_id' => $detail_id,
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => random_int(1, 10),
                    'harga' => random_int(1000, 500000),
                    'jumlah' => random_int(1, 10)
                ];
                $detail_id++;
            }
            $penjualan_id++; 
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
