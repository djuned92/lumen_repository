<?php

namespace App\Http\Requests;

use Pearl\RequestValidate\RequestAbstract;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;

class UserRequest extends RequestAbstract 
{
    public function rules(Request $req)
    {
        if($req->isMethod('post')) {
            $rules = [
                'email'     => 'required|email',
                'password'  => 'required',
                'role_id'   => 'required|numeric',
                'fullname'  => 'required',
                'phone'     => 'required|numeric',
                'address'   => 'required'
            ];
        }
        
        if($req->isMethod('put')) {
            $rules = [
                'id'        => 'required',
                'fullname'  => 'required',
                'phone'     => 'required|numeric',
                'address'   => 'required'
            ];
        }

        if($req->isMethod('delete')) {
            $rules = [
                'id' => 'required'
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [];
    }

    // protected function formatErrors(Validator $validator)
    // {
    //     return new JsonResponse([
    //         "status" => [
    //             "code" => 1,
    //             "message" => $validator->getMessageBag()->first()
    //         ]
    //     ], 422);
    // }
}