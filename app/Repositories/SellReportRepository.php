<?php

namespace App\Repositories;
use App\Models\SellReport;


class SellReportRepository{

    protected  $sellReport;

    public function __construct(SellReport $sellReport)
    {
        $this->sellReport=$sellReport;
    }

    public function getAll(){

        $sellReport = SellReport::all()
        ->sortByDesc('nama');

        return $sellReport;
    }
    public function save($data){
        return SellReport::create($data);
    }

    public function update($id, $data)
    {
        return SellReport::find($id)->update($data);
    }

    public function storeReport($data)
    {
        $report = SellReport::where('id_kendaraan', $data['id_kendaraan'])->first();
        return $report;
    }
}
