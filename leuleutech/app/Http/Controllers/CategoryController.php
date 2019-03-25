<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Message;
use DB;
use Session;
class CategoryController extends Controller
{
    public function Home(Request $request , $idcate)
    {
        if(is_numeric($idcate))
        {
            $dataMenu = DB::table('categories')->get();
            $dataOptions = DB::table('options')->get();
            $dataMessage = Message::orderBy('MDate','DESC')->get();
            $datacategory = Posts::join('Categories', 'Categories.id', '=', 'Posts.CateID')
            ->where('CateID',$idcate)
            ->take(6)
            ->orderBy('Posts.PostDate', 'DESC')
            ->get(array(
                'Posts.id',
                'CateID',
                'CateName',
                'CateColor',
                'PostName',
                'PostDate',
                'PostPhoto',
                'PostContent'
                )); 
            return View('pages.category')->with(compact('dataMenu','dataOptions','dataMessage','datacategory'));
        }
        else {
            return redirect('/');
        }
    }
}
