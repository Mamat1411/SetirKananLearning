<?php

namespace App\Repositories;
use App\Http\Resources\UsedCarResource;
use App\Models\UsedCar;

class UsedCarRepository
{
    public function __construct(UsedCar $usedCar)
    {
        $this->usedCar = $usedCar;
    }

    public function storeOrUpdate($request, $id = null, $method = null)
    {
        $dataUsedCar = $this->usedCar->updateOrCreate($request);
        $response = new UsedCarResource($dataUsedCar);
        return $response;
    }

    public function getData($request)
    {
        $id = $request->id;

        if (!$id) {
            $data = $this->usedCar->all();
        } else {
            $data = $this->usedCar->where('id', $id)->get();
            if ($data->isEmpty()) {
                $response = "Data Not Found";
                return $response;
            }
        }

        $response = UsedCarResource::collection($data);
        return $response;
    }

    public function destroy($request, $id)
    {

    }
}
