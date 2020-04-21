<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crimeinfo;


class CrimePostController extends Controller
{
   public function CrimePostIndex (){

         $CrimePosts = Crimeinfo::all();

       return view('CrimePostIndex',[
          'CrimePosts' => $CrimePosts
       ]);
   }

   public function ShowPostByID ($id){

      $CrimePosts = Crimeinfo::findOrFail($id);

       return view('ShowIDByPost',[
         'CrimePosts' => $CrimePosts
       ]);
   }

  public function CreateCrimePost(){

     $CrimePosts = Crimeinfo::all();
     
     return view('CreatePost');
  }

  public function SavePost(){

     $record = new Crimeinfo();

      $record->title = request('title');
      $record->place = request('place');
      $record->post  = request('post');
   
      $record->save();

     return redirect('/CrimePost')->with('msg','Posts created');
  }

  public function EditPost($id){

     $record = Crimeinfo::findOrFail($id);

     $record->title = request('title');
     $record->place = request('place');
     $record->post  = request('post');
  
     $record->update();

    return redirect('/CrimePost')->with('msg','Posts updated.');
  }

}
