<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemesananSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pemesanan')->insert([
            'nomor_antrian' => '1',
            'nama_pembeli' => 'Aysa',
            'nama_menu' => 'Paket 1',
            'harga' => '20000',
            'jumlah' => '1',
            'catatan' => '',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('pemesanan')->insert([
            'nomor_antrian' => '2',
            'nama_pembeli' => 'Saliya',
            'nama_menu' => 'Paket 2',
            'harga' => '18000',
            'jumlah' => '2',
            'catatan' => '',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('pemesanan')->insert([
            'nomor_antrian' => '3',
            'nama_pembeli' => 'Aysa Saliya',
            'nama_menu' => 'Paket 3',
            'harga' => '25000',
            'jumlah' => '3',
            'catatan' => '',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
