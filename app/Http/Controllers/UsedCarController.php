<?php

namespace App\Http\Controllers;

use App\Models\UsedCar;
use Illuminate\Http\Request;
use App\Repositories\UsedCarRepository;

class UsedCarController extends Controller
{
    public function __construct(UsedCarRepository $usedCarRepository)
    {
        $this->usedCarRepository = $usedCarRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $data = $this->usedCarRepository->getData($request);
            return $data;
        } catch (\Exception $e) {
            return $this->responseJson('error', $e->getMessage(), []);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsedCar  $usedCar
     * @return \Illuminate\Http\Response
     */
    public function show(UsedCar $usedCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsedCar  $usedCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsedCar $usedCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsedCar  $usedCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsedCar $usedCar)
    {
        //
    }
}
