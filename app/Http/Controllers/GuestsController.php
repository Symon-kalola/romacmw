<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Message;
use App\Models\User;
use App\Models\Photo;


use App\Models\Nursery;

class GuestsController extends Controller
{
    public function getNursaries(): View
    {
      $nurseries = Nursery::all();
        return view('guests.nursaries', compact('nurseries'));
        
    }
    public function getLand(): View
    {
        return view('guests.land');
        
    }
      public function getGallery(): View
    {
      $photos = Photo::all();
        return view('guests.gallery' );
        
    }
      public function getTeam(): View
    { $users = User::all();
        return view('guests.team', compact('users'));
        
    }
      public function getContact(): View
    {
      $users = User::all();
        return view('guests.contact', compact('users'));
        
    }
      public function getProduct(): View
    {
        return view('guests.product');
        
    }
    public function getNurseryGallery(){
      $photos = Photo::all();
      return view('guests.nursariesGallery' ,compact('photos'));
    }
       

     
    public function getEstatesGallery(){
      return view('guests.estatesGallery');
    }

    public function message(Request $request){

      $request->validate([
        'email'=>'required|email',
        'contact'=>'required|string',
        'subject'=>'required|string',
        'body'=>'required|string',
        'name'=>'required|string'
      ]);

      Message::create([
        'email'=> $request->email,
        'contact'=> $request->contact,
        'subject'=>$request->subject,
        'body'=> $request->body,
        'name'=>$request->name
      ]);

      return response('OK');
      
    }
    
    
}
