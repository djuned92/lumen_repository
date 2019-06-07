<?php

namespace App\Repositories;

use App\User;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserRepository extends Repository 
{
    public function create($data)
    {
        try {
            DB::beginTransaction(); // begin transaction

            $collection = collect($data); // all collection data
            $collection = $collection->merge(['created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
            
            $dt_user = $collection->only('email','password','role_id','provider','avatar','created_at')->toArray();
            $user_id = User::create($dt_user);
            
            $dt_profile = $collection->only('fullname','phone','address','created_at');
            $dt_profile = $dt_profile->merge(['user_id' => $user_id->id])->toArray();
            Profile::create($dt_profile);
            
            DB::commit(); // commit transaction
            return $this->responseSuccess(200, true, 'User created');
        } catch (\Exception $e) {
            DB::rollBack(); // rollback transaction
            return $this->responseError(500,$e->getMessage());
        }
    }
}