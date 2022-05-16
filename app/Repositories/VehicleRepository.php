<?php

namespace App\Repositories;
use App\Models\Vehicle;


class VehicleRepository{

    protected  $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle=$vehicle;
    }

    public function getAll(){

        $vehicle = Vehicle::all()->sortBy('nama');

        return $vehicle;
    }
    public function save($data){
        $vehicle = new $this->vehicle;

        $vehicle = $data;
        $vehicle->save();
        return $vehicle->fresh();

    }
}
