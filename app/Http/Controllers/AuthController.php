<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smartschool\Sso\Actions\AuthAction;

class AuthController extends Controller
{
    public function callback($type, $token, $id)
    {
        $action = new AuthAction();
        return $action->signViaUrl($type, $token, $id);
    }

    public function logout(Request $request)
    {
        $action = new AuthAction();
        return $action->signOut($request);
    }
}
