<?php

namespace App\Traits;

trait OutputApi
{
    public function responseSuccess($httpCode, $status, $message, $data = false)
    {
        $response = [
            'status' 	=> $status,
            'message'	=> $message,
            'data'		=> ($data) ? $data : []
        ];
        return response()->json($response, $httpCode);
    }

    public function responseError($httpCode, $message, $errors = false)
    {
        $response = [
            'message'   => $message,
            'errors'    => ($errors) ? $errors : null
        ];
        return response()->json($response, $httpCode);
    }
}