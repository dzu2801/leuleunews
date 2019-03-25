<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use Carbon\Carbon;
class QTriController extends Controller
{
    public function Home()
    {
        return view('quantri.pages.home');
    }

    


}