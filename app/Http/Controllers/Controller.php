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

    protected function responseSuccess($data = [])
    {
        if (is_bool($data)) {
            $data = [
                'data' => $data
            ];
        }

        if (count($data['data']) == 0) {
            $data = [
                'data' => []
            ];
        }

        return response()->json(array_merge($this->getStatusInfo(), $data), $this->httpStatusCode);
    }

    private function getStatusInfo()
    {
        return [
            'status' => [
                'code'    => $this->statusCode,
                'message' => $this->statusMessage
            ]
        ];
    }
}
