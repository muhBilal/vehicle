<?php

namespace App\Services;

use App\Repositories\VehicleRepository;

class VehicleService
{
    protected $vehicleRepository;

    public function __construct(VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    public function getAll()
    {
        return $this->vehicleRepository->getAll();
    }

    public function store($data){
        $result = $this->vehicleRepository->save($data);
        return $result;
    }
}
