<?php

namespace App\Services;

use App\Models\SellReport;
use App\Repositories\SellRepository;

class SellReportService
{
    protected $SellRepository;

    public function __construct(SellRepository $SellRepository)
    {
        $this->SellRepository = $SellRepository;
    }

    public function getAll()
    {
        return $this->SellRepository->getAll();
    }

    public function store($data){

        // $sell =  $this->saleRepository->store($data);

        // $saleReport = $this->saleReportEloquentRepo->getByVehicle($data['id_kendaraan']);

        // if ($saleReport) {
        //     // $this->saleReportEloquentRepo->update($saleReport->id, $sell);
        // } else {
        //     $this->saleReportEloquentRepo->store([
        //         'id_kendaraan' => $data['id_kendaraan'],
        //         'jumlah' => $sell->jumlah,
        //         'stok' => 3,
        //         'pembeli' => [
        //             [
        //                 'nama' => $sell->nama,
        //                 'alamat' => $sell->alamat,
        //                 'jumlah_pembelian' => $sell->jumlah_pembelian
        //             ]
        //         ]
        //     ]);
        // }
        // $result = $this->SellRepository->save($data);
        // return $result;

        $report = SellReport::where('id_kendaraan', $data['id_kendaraan'])->first();


        if(!$report){
            SellReport::create($data);
        } else {
            $report->update($data);
        }

        return $report;
    }
}
