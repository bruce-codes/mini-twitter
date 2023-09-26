<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;


class TweetController extends Controller
{
 
    public function index(){

        // hole mir alle tweets  aus der bank
     //   $tweets = Tweet::all();
// eintrage nach erstellungsdatum sortieren, neueste zu oberst
        $tweets = Tweet::orderBy('created_at', 'desc')->get();

        // daten in die View schicken
        return view('tweets.index', [
            'tweets' => $tweets
        ]);
    }



    // SHOW SINGLE TWEET
    public function show($id){

        // 1. hole einen einzelnen tweet aus der datenbank

        // 2. speichere diesen tweet in einer variabel
        $tweet = Tweet::find($id);
        // id, titel, text
        
        // 3. sende diese variabel zu dem view mit dem namen: tweets.show
      
        // daten in die View schicken
        return view('tweets.show', [
            'tweet' => $tweet
        ]);
    }


    //speichert den tweet- Store a new tweet in the database.
    public function store(Request $request)
    {
        // Speichere Formulardaten (Request) in der Datenbank
        $tweet = Tweet::create([
            'title' => $request->title,
            'text'  => $request->text
        ]);

        // //1. daten aus dem request 
        //  // // Validate the request...

        // $tweet = new Tweet;

        // $tweet->title = $request->title;
        // $tweet->text = $request->text;

        // $tweet->save();
        //  redirect to indexroute

        return redirect('/tweets');
    }

    public function create() {
        return view('tweets.create');       
    }

    public function delete($id) {
        // 1. Tweet aus der Datenbank holen (vergleiche mit Methode: show())
        $tweet = Tweet::find($id);

        // 2. Tweet löschen --> in Dokumentation von Laravel nachschauen
        $tweet->delete();

        // leite weiter zu der /tweets route
        return redirect('/tweets');


    }
}
