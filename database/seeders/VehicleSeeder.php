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
    }
}
