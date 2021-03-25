<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware(['guest']);
    }
    
    public function index() {
    	return view('auth.login');
    }

    public function store(Request $req) {
    	$this->validate($req, [
    		'email' => 'required|email',
    		'password' => 'required',
    	]);

    	if(!auth()->attempt($req->only('email', 'password'), $req->remember)) {
    		return back()->with('status', 'Invalid login details');
    	}

    	return redirect()->route('dashboard');
    }
}
