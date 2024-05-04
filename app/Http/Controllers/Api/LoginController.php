<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __invoke(Request $request){
        // set validation
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        // validation fails
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        // get credentials from request
        $credentials = $request->only('username', 'password');

        

        // if auth failed
        if(!$token = auth()->guard('api')->attempt($credentials)){
            return response()->json([
                'success' => false,
                'message' => 'Username atau Password anda Salah',
            ], 401);
        }

        Log::info('Authenticated User:', auth()->user());

        // if auth success
        return response()->json([
            'success' => true,
            'user' => auth()->user(),
            'token' => $token,
        ], 200);
    }
}