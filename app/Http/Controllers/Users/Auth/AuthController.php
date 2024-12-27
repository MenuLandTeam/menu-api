<?php

namespace App\Http\Controllers\Users\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserLoginRequest;
use App\Interfaces\Auth\AuthInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected AuthInterface $repository;

    public function __construct(AuthInterface $auth)
    {
        $this->repository = $auth;
    }

    public function login(UserLoginRequest $request)
    {
        return $this->repository->user_login($request);
    }
}
