<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        $data = [
            'name' => 'name',
            'title' => 'title'

        ];
        $keyword = 'keyword';
        return view('index',compact('data','keyword'));
    }

    //
    public function login()
    {
        session(['admin'=>1]);
        return 'admin/login';
    }
}
