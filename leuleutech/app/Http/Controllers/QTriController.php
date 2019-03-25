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

    // POST
    //Show list post
    public function listPost()
    {
        $listPost = DB::table('posts')->get();
        return view('quantri.pages.post.postList', ['listPost' => $listPost]);
    }

    //Category
    public function listCate()
    {
        $listCate = DB::table('categories')->get();

        return view('quantri.pages.category.cateList', ['listCate' => $listCate]);
    }

}