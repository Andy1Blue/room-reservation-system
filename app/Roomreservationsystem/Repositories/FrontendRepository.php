<?php

namespace App\Roomreservationsystem\Repositories;

use App\TouristObject;

class FrontendRepository {
    
    public function getObjectsForMainPage() {
        return TouristObject::all();
    }

}