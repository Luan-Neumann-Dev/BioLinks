<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        return view("auth.login");
    }

    public function login(MakeLoginRequest $request) {
       if($request->attemptToLogin()) {
            return to_route('dashboard');
       }

        return back()->with(['message' => "Não deu certo!!"]);
    }
}
