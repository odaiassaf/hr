<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email'=>'required|string|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = new User([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if($user->save()){
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->plainTextToken;

            return response()->json([
            'message' => 'Successfully created user!',
            'accessToken'=> $token,
            ],201);
        }
        else{
            return response()->json(['error'=>'Provide proper details']);
        }
    }
    public function login(Request $request)
    {
                $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
                'remember_me' => 'boolean'
                ]);
            
                $credentials = request(['email','password']);
                if(!Auth::attempt($credentials))
                {
                return response()->json([
                    'message' => 'Unauthorized'
                ],401);
                }
            
                $user = $request->user();
                $tokenResult = $user->createToken('Personal Access Token');
                $token = $tokenResult->plainTextToken;
            
                return response()->json([
                'accessToken' =>$token,
                'token_type' => 'Bearer',
                ]);
        }
        public function user(Request $request)
{
    $user = $request->user();
    return response()->json($request->user());
    // return UserResource::collection($user->name);
}
public function logout(Request $request)
{
    $request->user()->tokens()->delete();

    return response()->json([
    'message' => 'Successfully logged out'
    ]);

}
}
