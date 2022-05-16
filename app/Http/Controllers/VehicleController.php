<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Sell;
use App\Models\SellReport;

use App\Services\VehicleService;
use App\Services\SellReportService;
use Exception;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    protected $VehicleService, $SellReportService;

    public function __construct(VehicleService $vehicleService, SellReportService $sellReportService)
    {
        $this->vehicleService = $vehicleService;
        $this->sellReportService = $sellReportService;
    }

    public function stock()
    {
        $result = ['status'=> 200];

        try{
            $result['data'] = $this->vehicleService->getAll();
        }catch (Exception $e){
            $result = [
                'status'=>500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function sell(Request $request)
    {
        // $sell = Sell::create(request()->all());
        // return response()->json($sell);

        // $result = ['status'=>200];

        // try{
        //     $result['data'] = $this->postService->getAll();
        // }

        $data = $request->all();
        $result = ['status'=> 201];

        try{
            $result['data'] = $this->sellReportService->store($data);
        }catch(Exception $e){
            $result = [
            'status'=> 500,
            'eror' => $e->getMessage()
            ];
        }

        return response()->json($result);
    }

    public function sellReport(Request $request)
    {
        $data = $request->all();
        $result = ['status'=> 201];

        try{
            $result['data'] = $this->sellReportService->getAll();
        }catch(Exception $e){
            $result = [
            'status'=> 500,
            'eror' => $e->getMessage()
            ];
        }

        return response()->json($result);
    }
}
