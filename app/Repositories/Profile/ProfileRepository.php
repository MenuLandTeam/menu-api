<?php
namespace App\Repositories\Profile;

use App\Http\Resources\Auth\UserInfoAuthResource;
use App\Http\Resources\Profile\UserProfileResource;
use App\Interfaces\Auth\AuthInterface;
use App\Interfaces\Profile\ProfileInterface;

class ProfileRepository implements ProfileInterface
{

    public function index()
    {
        $user = auth('users')->user();
        return helper_response_fetch(new UserProfileResource($user));
    }


}
