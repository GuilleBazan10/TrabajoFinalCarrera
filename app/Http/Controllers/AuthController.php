<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario de inicio de sesión

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redireccionar a la página de inicio
            return redirect()->intended('/');
        } else {
            // Autenticación fallida, redireccionar de vuelta al formulario
            return back()->withErrors(['email' => 'Credenciales incorrectas']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
