<?php

namespace App\Services;

use App\Models\SellReport;
use App\Repositories\SellReportRepository;

class SellReportService
{
    protected $SellReportRepository;

    public function __construct(SellReportRepository $SellReportRepository)
    {
        $this->SellReportRepository = $SellReportRepository;
    }

    public function getAll()
    {
        return $this->SellReportRepository->getAll();
    }

    public function store($data){

        $report = $this->SellReportRepository->storeReport($data);

        if(!$report){
            $report = SellReport::create($data);
        } else {
            $report->pembeli = array_merge($report->pembeli, $data['pembeli']);
            $report->save();
        }

        return $report;
    }
}
