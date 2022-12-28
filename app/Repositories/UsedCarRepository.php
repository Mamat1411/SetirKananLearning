<?php

namespace App\Repositories;
use App\Http\Resources\UsedCarResource;
use App\Models\UsedCar;
use Exception;

class UsedCarRepository
{
    public function __construct(UsedCar $usedCar)
    {
        $this->usedCar = $usedCar;
    }

    public function storeOrUpdate($request, $id = null, $method = null)
    {
        //validation for request method
        if (request()->method() == 'PUT') {
            //validation for id data
            if (!$this->usedCar->whereId($id)->first()) {
                throw new Exception("Data Is Not Found");
            }
        }
        //Insert Data
        $dataUsedCar = $this->usedCar->updateOrCreate(
            ['id' => $id],
            $request
        );
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

    public function destroy($id)
    {
        $data = $this->usedCar->whereId($id)->first();
        if (!$data) {
            throw new Exception("Data Is Not Found");
        } else {
            $data->delete();
        }
    }
}
