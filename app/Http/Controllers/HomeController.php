<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paketInternet;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('user.index', [
            'title' => 'Home',
        ]);
    }
}
