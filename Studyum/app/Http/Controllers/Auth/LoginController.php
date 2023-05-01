<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Auth as FirebaseAuth;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $auth;

    public function __construct(FirebaseAuth $auth)
    {
        $this->auth = $auth;
    }

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            $user = $this->auth->signInWithEmailAndPassword($credentials['email'], $credentials['password']);
            // Usuário autenticado com sucesso, redirecione para a página inicial do aplicativo.
            return redirect('/dashboard');
        } catch (\Exception $e) {
            // Autenticação falhou, redirecione de volta para a página de login com mensagem de erro.
            return redirect('/login')->with('error', $e->getMessage());
        }
    }

    public function logout(Auth $auth)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
