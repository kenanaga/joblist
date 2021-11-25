<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class postcontroll extends Controller
{
     public function post(Request $post){

        $post->validate([
            'mail' => 'required',
            'title' =>'required'
        ]);
       

        $mail = $post->input('mail');
        $title = $post->input('title');
        $type = $post->input('type');
        $catname = $post->input('catname');
        $city = $post->input('city');
        $summary = $post->input('summary');
        $desc = $post->input('desc');
        $compname = $post->input('compname');
        $website = $post->input('website');
        
       $insert = DB::table('jobs')->insert([
            'mail' => $mail,
            'title' => $title,
            'type' => $type,
            'catname' => $catname,
            'city' => $city,
            'summary' => $summary,
            'desc' => $desc,
            'compname' => $compname,
            'website' => $website
        ]);
      return redirect()->route('link');
    
    }



    public function link(){
        return redirect('/');
    }

    public function select(){
       $data = DB::table('jobs')->orderBy('id','DESC')->get();
       $vipdata =DB::table('jobs')->where('id',4)->get();
       return view('index',['data' => $data,'vipdata'=>$vipdata]);
    }

    
    public function single($id){
        $singledata = DB::table('jobs')->where('id',$id)->get();
        return view('single',['singledata'=>$singledata]);
    }

    public function axtar(){
        return view('axtar');

    }

    public function elanaxtar(Request $axtar){
        $title = $axtar->input('title');
        $city = $axtar->input('city');
    $axtardata = DB::table('jobs')
    ->where('title', $city)
    ->Orwhere('title', 'LIKE', "%{$title}%")
    ->get();
     return view('axtar',['axtardata'=>$axtardata]);  
     
    }

}


?>
