<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Message;
use DB;
use Session;
class PostsController extends Controller
{
    // View -> View Post data gets Database
    public function Views(Request $request,$id)
    {
        if(is_numeric($id))
        {
            $viewtam = Posts::firstOrNew(['id' => $id]);
            $cout = ((int)$viewtam->PostView)+1;
            DB::table('Posts')
            ->where('id', $id)
            ->update(['PostView' => $cout]);
            
        $idcate =((int)$viewtam->CateID);
        $dataMenu = DB::table('categories')->get();
        $dataOptions = DB::table('options')->get();
        $dataMessage = Message::orderBy('MDate','DESC')->get();
        $dataPost = Posts::where('id',$id)->get();
        $dataPostRandom = Posts::inRandomOrder()->where('CateID',$idcate)->take(12)->get();
        return View('pages.views')->with(compact('dataMenu','dataOptions','dataPost','dataMessage','cout','dataPostRandom'));
           
        }
        else {
            return redirect('/');
        }
    }
}
