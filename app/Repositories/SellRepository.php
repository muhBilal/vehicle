<?php

namespace App\Repositories;
use App\Models\Sell;
use App\Models\SellReport;

class SellRepository{

    protected  $sellReport;

    public function __construct(Sell $sell)
    {
        $this->sell=$sell;
    }

    public function getAll(){

        $sell = Sell::all()
        ->sortByDesc('nama');

        return $sell;
    }
    public function save($data){

        return Sell::create($data);
    }

    public function store($data)
    {
        return Sell::create($data);
    }
}
