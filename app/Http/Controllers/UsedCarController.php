<?php

namespace App\Http\Controllers;

use App\Models\UsedCar;
use Illuminate\Http\Request;

class UsedCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "This is UsedCarController Index";
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
