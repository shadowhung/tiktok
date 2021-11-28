<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }
        return view('home/index', compact('feed_items'));
    }

    public function help()
    {
        return view('home/help');
    }

    public function about()
    {
        return view('home/about');
    }
}