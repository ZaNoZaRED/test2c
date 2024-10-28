<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
class OffersController extends Controller
{
    public function index() {
        $po = Posts::orderBy('created_at', 'desc')->where('type', 'Предложение')->get();
        return view('offers', compact('po'));
    }
}
