<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Front\CreateLinkRequest;
use Illuminate\Support\Str;
use App\Models\ShortLink;

class CreateController extends Controller
{
    public function create(CreateLinkRequest $request)
    {
        $data = $request->validated();
        $data['code'] = Str::random(6);
        $shortlink = ShortLink::firstOrCreate($data);
        return redirect()->route('home')->with('message', 'link shortened');
    }
}
