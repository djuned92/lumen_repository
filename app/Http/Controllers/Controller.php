<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @var Illuminate\Http\Request
     */
    protected $request;

    /**
     * Status code
     *
     * @var int
     */
    protected $statusCode = 0;

    /**
     * Status message
     *
     * @var string
     */
    protected $statusMessage = 'Success';

    /**
     * Http status code
     *
     * @var int
     */
    protected $httpStatusCode = Response::HTTP_OK;
}
