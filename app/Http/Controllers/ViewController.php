<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViewController extends Controller
{
    //
    public function view()
    {
        return view('view');
    }

    //
    public function article()
    {
        return view('article');
    }

    //
    public function layouts()
    {
        return view('layouts');
    }

}
