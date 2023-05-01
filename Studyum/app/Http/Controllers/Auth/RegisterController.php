<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Kreait\Firebase\Contract\Auth;
use Kreait\Firebase\Exception\AuthException;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        return view('cadastro');
    }
    public function register(Request $request, Auth $auth)
    {

        $userProperties = [
            'email' => $request->input('email'),
            // 'emailVerified' => false,
            // 'phoneNumber' => '+15555550100',
            'password' => $request->input('password'),
            'displayName' => $request->input('name'),
            // 'photoUrl' => 'http://www.example.com/12345678/photo.png',
            // 'disabled' => false,
        ];


        try {
            $createdUser = $auth->createUser($userProperties);
        } catch (AuthException $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return view('login');
        // return response()->json(['success' => 'User registered successfully']);
    }
}
