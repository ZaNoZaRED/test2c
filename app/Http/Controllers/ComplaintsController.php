<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    public function index() {
        $po = Posts::orderBy('created_at', 'desc')->get();
        return view('offers', compact('po'));
    }
}
