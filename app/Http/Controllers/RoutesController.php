<?php

namespace App\Http\Controllers;

use App\Models\URL;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RoutesController extends Controller
{
    public function index() : View{
        return view('pages.home.index');
    }

    public function shorten(Request $request) : RedirectResponse {
        $uniqid = Str::random(9);
        while (URL::query()->where('shorten' , $uniqid)->first()){
            $uniqid = Str::random(9);
        }
        URL::query()->create([
            'url' => $request->url,
            'shorten' => $uniqid
        ]);
        return redirect()->back();
    }

    public function redirectToUrl(){

    }
}
