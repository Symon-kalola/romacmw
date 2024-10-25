<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Photo;
use App\Models\Nursery;
use App\Models\User;
use App\Models\Message;
use Webklex\IMAP\Facades\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
  public function dashboard()
  {
    

 
    $users = User::count();
    $nursery = Nursery::count();
    $message = Message::count();
    $photos = Photo::count();
    return view('dashboard' ,compact('users','nursery','photos', 'message'));
  }
    
    public function getNurseriesPhotos($name){
        $photos = Photo::where('type', $name)->get();
    
        return view('admin.nurseriesGallery', compact('photos'));
    }
    public function getEmails(){
        // Connect to your email server
    $client = Client::account('default');
    $client->connect();

    // Select the INBOX folder
    $folder = $client->getFolder('INBOX');

    // Fetch all messages and sort by date in descending order
    $messages = $folder->messages()->all()->get()->sortByDesc(function($message) {
        return Carbon::parse($message->getDate()); // Parse date with Carbon
    });

    // Iterate through each message
    $emails = [];
    foreach ($messages as $message) {
        $emails[] = [
            'subject' => $message->getSubject(),
            'from'    => $message->getFrom()[0]->mail,
            'date'    => Carbon::parse($message->getDate())->format('Y-m-d H:i:s'), // Use Carbon to format the date
            'body'    => $message->getHTMLBody(true) // Or use getTextBody() for plain text
        ];
    }
       
        return view('admin.emails', compact('emails'));
    }
    public function getMessages(){
        $messages = Message::all();
        return view('admin.messages', compact('messages'));
    }
    public function getTeam(){
        $users = User::all();
        return view('admin.team', compact('users'));
    }
    public function getNurseries(){
        $nurseries = Nursery::all();
        return view('admin.nurseries', compact('nurseries'));
    }

    public function createNurseies(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'price'=>'required|integer',
            'description'=>'required|string',
            'photo'=>'required|image',
        ]);

        $file = $request->file('photo');
        $path = $file->store('photos', 'public');

        Nursery::create([

            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'photo'=>'storage/'.$path

        ]);

        return response()->json(['message'=>"success"]);
    }

   
    public function deleteNurseies($id)
    {
       
        $nursery = Nursery::find($id);
        $nursery->delete();
       
        return redirect()->route('nurseries.get');
       
    }


    public function addPhoto(Request $request)
    {
        $request->validate([
            'type'=>'required|string',
            'photo'=>'required|image',
        ]);
        if ($request->hasFile('photo')) {
       
            $file = $request->file('photo');
            $path = $file->store('photos', 'public');

            $photo = Photo::create([
                'type'=>$request->type,
                'photo'=>'storage/'.$path

            ]);

           



           
        }
        return response()->json(["photo"=>$photo]);
    }
    public function deletePhoto($id, $name)
    {
        $del = Photo::find($id);
        $del->delete();
        $photos = Photo::where('type', $name)->get();
        return redirect()->route('nurseriesPhotos.get', $name);
      
           
    }
   
    
    
}
