<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return 'admin/article/index';
    }

    //
    public function store()
    {
        return 'admin/article/store';
    }
}
