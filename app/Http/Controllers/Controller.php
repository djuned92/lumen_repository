<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Traits\Validation;
use App\Traits\OutputApi;

class Controller extends BaseController
{
    use OutputApi, Validation;
}
