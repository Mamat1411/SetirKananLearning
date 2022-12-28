<?php

namespace App\Http\Controllers;

use App\Models\UsedCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UsedCarRequest;
use App\Repositories\UsedCarRepository;
use Exception;
use Illuminate\Routing\Controller;
// use App\Http\Controllers\Controller;

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
    public function store(UsedCarRequest $request)
    {
        DB::beginTransaction();
        try {
            $request = $request->all();
            $data = $this->usedCarRepository->storeOrUpdate($request);
            DB::commit();
            return response()->json("Data Successfully Added", 200, []);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e->getMessage(), 200, []);
        }
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
    public function update(UsedCarRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $request = $request->all();
            $data = $this->usedCarRepository->storeOrUpdate($request, $id);
            DB::commit();
            return response()->json("Data Successfully Updated", 200, []);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json($e->getMessage(), 500, []);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsedCar  $usedCar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = $this->usedCarRepository->destroy($id);
            return response()->json("Data Successfully Deleted", 200, []);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500, []);
        }
    }
}
