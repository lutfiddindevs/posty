<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PostLiked;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __construct() {
    	$this->middleware(['auth']);
    }

    public function index() {
    	$user = auth()->user();
    	Mail::to($user)->send(new PostLiked());
    	return view('dashboard');
    }

}
