<?php

namespace Tests\Unit;

use Tests\TestCase;

class ApiTest extends TestCase
{
    // Route::get('stock', [VehicleController::class, 'stock'])->name('stok');
    // Route::post('sell', [VehicleController::class, 'sell'])->name('sell');
    // Route::post('sellReport', [VehicleController::class, 'sellReport'])->name('report');

    public function test_stok()
    {
        $this->get(route('stok'))->assertStatus(200);
    }

    public function test_sell()
    {
        $data = [
            "id_kendaraan" => "62811af99c61bc70e20509e5",
            "pembeli" => [
                "nama_pembeli" => "jordan",
                "alamat" => "jalan waru gunung no.4",
                "no_telepon" => "628238129"
        ],
            "jumlah_pembelian" => 2
        ];
        $this->post(route('sell'), $data)->assertStatus(200);
    }

    public function test_report()
    {
        $this->get(route('report'))->assertStatus(200);
    }
}
