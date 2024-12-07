<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirecionar baseado no tipo de usuário
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif (Auth::user()->role === 'funcionario') {
                return redirect()->route('funcionario.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        }

        return back()->withErrors(['email' => 'Credenciais inválidas']);
    }
}
