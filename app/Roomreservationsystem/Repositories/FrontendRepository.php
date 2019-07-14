<?php

namespace App\Roomreservationsystem\Repositories;

use App\TouristObject;
use App\Roomreservationsystem\Interfaces\FrontendRepositoryInterface;

class FrontendRepository implements FrontendRepositoryInterface  {

    public function getObjectsForMainPage()
    {
        return TouristObject::all();
    }

}
