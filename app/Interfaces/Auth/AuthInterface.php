<?php

namespace App\Interfaces\Auth;

interface AuthInterface
{
    public function admin_login($request);

    public function user_login($request);




}
