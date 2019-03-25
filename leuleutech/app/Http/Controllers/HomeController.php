<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function Home()
    {
        return view('admin.home');
    }

    public function Table()
    {
        return view('admin.table');
    }
}
