<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
    	return view('posts.index');
    }

    public function store(Request $req) {
    	$this->validate($req, [
    		'body' => 'required'
    	]);

    	$req->user()->posts()->create($req->only('body'));

    	return back();
    }
}
