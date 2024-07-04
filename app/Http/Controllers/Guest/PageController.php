<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        return view('home');
    }

    public function comics()
    {
        $comics = Comic::all();

        $data = [
            "comics" => $comics
        ];
        return view('comics.index', $data);
    }
}
