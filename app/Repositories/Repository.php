<?php

namespace App\Repositories;

use App\Repositories\InterfaceRepository;
use App\Traits\OutputApi;

abstract class Repository implements InterfaceRepository 
{    
    use OutputApi;
}