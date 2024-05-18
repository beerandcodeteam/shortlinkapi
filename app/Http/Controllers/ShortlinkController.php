<?php

namespace App\Http\Controllers;

use App\Models\Shortlink;
use Illuminate\Http\Request;

class ShortlinkController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'name'=> 'required|string|max:30|alpha|unique:shortlinks',
        ]);

        $shortlink = Shortlink::create($request->all());

        return response()->json($shortlink, 201);
    }

    public function show($shortlink)
    {
        $shortlink = Shortlink::where('name', $shortlink)->firstOrFail();

        return redirect($shortlink->url);
    }
}
