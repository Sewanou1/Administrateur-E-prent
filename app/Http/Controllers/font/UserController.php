<?php

namespace App\Http\Controllers\font;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register(Request $request){
        $fields = $request->validate([
            'nom'=>'required| string',
            'prenom'=>'required| string',
            'email'=>'required|string|email|unique:users,email',
            'telephone'=>'required| int',
            'adresse'=>'required| string',
            'password'=>'required| string | confirmed'
        ]);

        $user = User::create([
            'nom'=>$fields['nom'],
            'prenom'=>$fields['prenom'],
            'email'=>$fields['email'],
            'telephone'=>$fields['telephone'],
            'adresse'=>$fields['adresse'],
            'password'=>bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response, 201);
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email'=>'required|string',
            'password'=>'required| string'
        ]);

        $user = User::where('email',$fields['email'])->first();

        if(!$user || !Hash::check($fields['password'],$user->password)){
            return response([
                'message'=>'Bad cred'
            ],401);
        }

        $token=$user->createToken('myApiToken')->plainTextToken;

        $response=[
            'user'=>$user,
            'token'=>$token
        ];

        return Response($response, 201);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return [
            'message'=>'Logged out'
        ];
    }

    public function index(){
        return view('index', [
            'auth_user' => Auth::user()
        ]);
    }
}
