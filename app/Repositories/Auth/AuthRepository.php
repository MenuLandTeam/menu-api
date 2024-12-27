<?php
namespace App\Repositories\Auth;

use App\Http\Resources\Auth\UserInfoAuthResource;
use App\Interfaces\Auth\AuthInterface;

class AuthRepository implements AuthInterface
{

    public function admin_login($request)
    {

    }

    public function user_login($request)
    {
        if (! $token = auth('users')->attempt(request(['email', 'password']))){
            return helper_response_unauthorized();
        }
        $user = auth('users')->user();
        return helper_response_main('user login success',[
            'token' => $token,
            'user' => (new UserInfoAuthResource($user)),
            'token_type' => 'Bearer'
        ]);

    }

}
