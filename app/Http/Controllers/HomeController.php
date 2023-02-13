<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paketInternet;

class HomeController extends Controller
{
    //
    public function index()
    {
        // $paketInternets = paketInternet::all();
        return view('user.index', [
            'title' => 'Home',
        ]);
    }
}
