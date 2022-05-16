<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::create([
            "nama" => "Mio",
            "tahun_keluaran" => 2022,
            "warna" => "merah",
            "harga" => 19000000,
            "motor" => [
                "mesin" => "100 cc",
                "kapasitas_penumpang" => 7,
                "tipe" => "MPV"
            ],
            "stock" => 8,
        ]);
        Vehicle::create([
            "nama" => "supra",
            "tahun_keluaran" => 2022,
            "warna" => "putih",
            "harga" => 211000000,
            "mobil" => [
                "mesin" => "3000 cc",
                "kapasitas_penumpang" => 2,
                "tipe" => "MPV"
            ],
            "stock" => 3,
        ]);
        Vehicle::create([
            "nama" => "gtr",
            "tahun_keluaran" => 2020,
            "warna" => "merah",
            "harga" => 431000000,
            "mobil" => [
                "mesin" => "3350 cc",
                "kapasitas_penumpang" => 2,
                "tipe" => "MPV"
            ],
            "stock" => 4,
        ]);
        Vehicle::create([
            "nama" => "vario",
            "tahun_keluaran" => 2022,
            "warna" => "hitam",
            "harga" => 25000000,
            "mobil" => [
                "mesin" => "200 cc",
                "kapasitas_penumpang" => 2,
                "tipe" => "MPV"
            ],
            "stock" => 6,
        ]);
    }
}
