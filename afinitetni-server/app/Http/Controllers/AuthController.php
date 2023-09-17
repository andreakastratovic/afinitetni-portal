<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Http\Resources\UserResource;


class AuthController extends Controller
{
    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validate user input
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => 'Invalid input'], 400);
        }
    
        // Attempt to authenticate the user using username
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication successful, generate an API token
            $user = Auth::user();
            $token = $user->createToken('authToken')->accessToken;
    
            return response()->json(['token' => $token], 200);
        } else {
            // Authentication failed
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }
    
}
