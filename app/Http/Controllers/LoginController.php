<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Helpers\UffsAuthHelper;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('login.index');
    }

    public function auth(Request $request)
    {
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('username', 'password');
        $userData = UffsAuthHelper::login($credentials);

        if (!$userData) {
            return redirect()
                ->route('login.index')
                ->withErrors([
                    'credential' => 'Login inválido, tente novamente.'
                ]);
        }
        $user = $this->getOrCreateUser($userData);

        Auth::login($user);
        return redirect()->intended('home');
    }

    private function getOrCreateUser($data)
    {
        $user = User::where('uid', $data->uid)->first();
        if ($user) {
            $user->update([
                'username' => $data->username,
                'email' => $data->email,
                'name' => $data->name,
                'cpf' => $data->cpf
            ]);
        } else {
            $user = User::create([
                'username' => $data->username,
                'uid' => $data->uid,
                'email' => $data->email,
                'name' => $data->name,
                'cpf' => $data->cpf
            ]);
        }

        return $user;
    }
}
