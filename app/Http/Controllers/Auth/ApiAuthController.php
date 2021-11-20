<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Session;

class ApiAuthController extends Controller
{
    public function register (Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string'
        ]);
        $tokenResult = $user = "";
        try {
            $request['password']=Hash::make($request->password);
            $request['remember_token'] = Str::random(10);
            $user = User::create($request->toArray());
            $tokenResult = $user->createToken('Personal Access Token');
            $success = true;
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        $response = ['token' => $tokenResult,'user' => $user,
        'success' => $success];
        return response($response, 200);
    }

    public function login (Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);        
        $user = Auth::guard('api')->user();
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        $success = true;

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'success' => $success,
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()
        ]);
    }

    public function logout (Request $request) {
        try {
            Session::flush();
            $success = true;
            $message = 'Successfully logged out';
            $request->user()->token()->revoke();
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);

        // $token = $request->user()->token();
        // $token->revoke();
        // $response = ['message' => 'You have been successfully logged out!'];
        // return response($response, 200);
    }

}
