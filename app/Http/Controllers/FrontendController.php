<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function loginRequest(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password, $user->password))
        {
            return back()->withErrors(["Invalid Cardentials!"]);
        }
        else
        {
            $req->session()->put('user', $user);
            return redirect('/');
        }

        
    }
}
