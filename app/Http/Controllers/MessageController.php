<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{

    public function index()
    {
        $message = Message::orderBy('created_at')->get();

        $newClaims = $claims->sortByDesc('created_at')->take(3);
        return view('claims.index')->with([
            'claims' => $claims,
            'newClaims'=>$newClaims
        ]);    }

    public function create(Request $request)
    {
        return view('create');

    }

    public function store(Request $request)
    {
        # Validate the request data
        $request->validate([
            'name' => 'required|alphaNumeric',
            'location' =>  'required|alphaNumeric',
            'story'=>'required|alphaNumeric',
        ]);
        $message = new Message();
        $message->name = $request->name;
        $message->location = $request->location;
        $message->story = $request->story;

        $message->save();
        return redirect('/message')->with([
            'alert' => 'Your message was added.'
        ]);


    }

    public function practiceX()
    {
        # Instantiate a new Message Model object
        $message = new Message();

        # Set the properties
        $message->name = 'Harry Potter and the Sorcerer\'s Stone';
        $message->location = 'Newark';
        $message->story = 'It works!';

        # Invoke the Eloquent `save` method to generate a new row in the
        # `books` table, with the above data
        $message->save();

        dump('Added: '.$message->name);
    }



//    public function index(Request $request)
//    {
//        return view('layouts.show')->with([
//            'totalNumbers' => $request->session()->get('totalNumbers', ''),
//            'randomNumbers' => $request->session()->get('randomNumbers', ''),
//            'showOdds' => $request->session()->get('showOdds', ''),
//            'lotteryList' => $request->session()->get('lotteryList', ''),
//            'oddResults' => $request->session()->get('oddResults', '')
//        ]);
//    }
}





