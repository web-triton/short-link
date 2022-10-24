<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShortLink;

class CodeController extends Controller
{
    public function code($code)
    {
        $link = ShortLink::where('code', $code)->first();
        $link->count++;
        $link->save();
        return redirect($link->link);
    }
}
