<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShortLink;

class IndexController extends Controller
{
    public function index()
    {
        $links = ShortLink::orderBy('created_at', 'DESC')->get();
        return view('index', compact('links'));
    }
}
