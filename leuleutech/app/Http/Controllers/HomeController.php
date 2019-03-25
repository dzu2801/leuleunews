<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Posts;
use App\Message;

class HomeController extends Controller
{
    public function Home()
    {
        
        $dataMenu = DB::table('categories')->get();
        $dataOptions = DB::table('options')->get();
        $dataMessage = Message::orderBy('MDate','DESC')->get();

        $postdata =  Posts::join('Categories', 'Categories.id', '=', 'Posts.CateID')
            ->take(10)
            ->orderBy('Posts.PostDate', 'DESC')
            ->get(array(
                'Posts.id',
                'CateID',
                'CateName',
                'CateColor',
                'PostName',
                'PostDate',
                'PostPhoto'
                ));
        $postSmartPhone = Posts::join('Categories', 'Categories.id', '=', 'Posts.CateID')
            ->where('CateID',1)
            ->take(6)
            ->orderBy('Posts.PostDate', 'DESC')
            ->get(array(
                'Posts.id',
                'CateID',
                'CateName',
                'CateColor',
                'PostName',
                'PostDate',
                'PostPhoto'
                ));       
        
        $dataVerCar =Posts::join('Categories', 'Categories.id', '=', 'Posts.CateID')
            ->where('CateID',4)
            ->take(1)
            ->orderBy('Posts.PostDate', 'DESC')
            ->get(array(
                'Posts.id',
                'CateID',
                'CateName',
                'CateColor',
                'PostName',
                'PostDate',
                'PostPhoto'
                ));       

        $datadontmiss = Posts::join('Categories', 'Categories.id', '=', 'Posts.CateID')
            ->where('CateID',4)
            ->take(4)
            ->orderBy('Posts.PostDate', 'DESC')
            ->get(array(
                'Posts.id',
                'CateID',
                'CateName',
                'CateColor',
                'PostName',
                'PostDate',
                'PostPhoto'
                ));       
        $laptopData = Posts::join('Categories', 'Categories.id', '=', 'Posts.CateID')
            ->where('CateID',2)
            ->take(6)
            ->orderBy('Posts.PostDate', 'DESC')
            ->get(array(
                'Posts.id',
                'CateID',
                'CateName',
                'CateColor',
                'PostName',
                'PostDate',
                'PostPhoto'
                
                )); 
        
            $Xemnhieudata = Posts::join('Categories', 'Categories.id', '=', 'Posts.CateID')
            ->take(6)
            ->orderBy('Posts.PostDate', 'DESC')
            ->get(array(
                'Posts.id',
                'CateID',
                'CateName',
                'CateColor',
                'PostName',
                'PostDate',
                'PostPhoto'
                )); 

            $devicesData = Posts::join('Categories', 'Categories.id', '=', 'Posts.CateID')
            ->where('CateID',7)
            ->take(6)
            ->orderBy('Posts.PostDate', 'DESC')
            ->get(array(
                'Posts.id',
                'CateID',
                'CateName',
                'CateColor',
                'PostName',
                'PostDate',
                'PostPhoto'
                ));  

            $ReviewData = Posts::where('CateID',5)->take(4)->orderBy('Posts.PostDate', 'DESC')->get();
            $randomData = Posts::inRandomOrder()->take(12)->get();
            
            $mydate = date('m/d/Y');
            //$mydate = '03/05/2019';
            $daystosum = '5';
            $datesum = date('y/m/d', strtotime($mydate.' - '.$daystosum.' days'));

            $DataViews = Posts::join('Categories', 'Categories.id', '=', 'Posts.CateID')
            ->where('PostDate', '>=', $datesum.' 00:00:00')
            ->take(6)
            ->orderBy('PostView', 'DESC')
            ->get(array(
                'Posts.id',
                'CateID',
                'CateName',
                'CateColor',
                'PostName',
                'PostDate',
                'PostPhoto',
                'PostView',
                ));  
        return view('pages.home')->with(compact('dataMenu','dataOptions','postdata','dataMessage','postSmartPhone','dataVerCar','datadontmiss','laptopData','devicesData','ReviewData','randomData','DataViews'));
    }
    public function test()
    {
        return view('pages.test');
    }
}
