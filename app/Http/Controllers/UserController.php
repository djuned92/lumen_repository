<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryEloquent as User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all()
    {
        return $this->user->with(['role'])->all();
        // return $this->user->paginate($limit = 5, $columns = ['*']);
    }

    public function create(UserRequest $req)
    {
        
    }
}
