<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
    	return view('auth.register');
    }

    public function store(Request $req) {
    	$this->validate($req, [
    		'name' => 'required|max:255',
    		'username' => 'required|max:255',
    		'email' => 'required|email|max:255',
    		'password' => 'required|confirmed',
    	]);

    	User::create([
    		'name' => $req->name,
    		'username' => $req->username,
    		'email' => $req->email,
    		'password' => Hash::make($req->password)
    	]);

        auth()->attempt($req->only('email', 'password'));

    	return redirect()->route('dashboard');

    }
}
