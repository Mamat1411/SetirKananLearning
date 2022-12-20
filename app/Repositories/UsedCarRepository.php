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

    }

    public function getData($request, $id = null)
    {

    }

    public function destroy($request, $id)
    {

    }
}
