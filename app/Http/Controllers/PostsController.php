<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
class PostsController extends Controller
{
    public function index() {
        $posts = Posts::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('posts'));
    }
    

    public function create(Request $request) {
        Posts::create([
            'txt' => request('txt'),
            'type'=> request('type'),
            'status'=> request('status')
        ]);
        return redirect('/');
    }
}

