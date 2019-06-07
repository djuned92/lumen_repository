<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository as User;
use Validator;

class UserController extends Controller
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param Request all
     * @return JSON 
     */
    public function create(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email'     => 'required|email',
            'password'  => 'required',
            'role_id'   => 'required|numeric',
            'fullname'  => 'required',
            'phone'     => 'required|numeric',
            'address'   => 'required'
        ]);

        if($validator->fails()) {
            $keys = $validator->errors()->keys(); // get keys
            $messages = $validator->errors()->all(); // get message error

            $err = $this->reformatValidationError($keys, $messages);
            return $this->responseError(422, 'Validation errors', $err);
        }
        
        $res = $this->user->create($req->all());

        return $res;
    }
}
