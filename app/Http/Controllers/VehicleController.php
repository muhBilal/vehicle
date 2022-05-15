<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Sell;
use App\Models\SellReport;
use Symfony\Component\HttpFoundation\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function sell(Request $request)
    {
        $sell = Sell::create(request()->all());
        return response()->json($sell);
    }

    /**
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        $vehicle = Vehicle::all();
        return response()->json($vehicle);
    }

    public function sellReport(Request $request){
        $report = SellReport::create(request()->all());
        return response()->json($report);
    }
}
