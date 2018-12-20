<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{

    public function index(Request $request)
    {
        $request->validate([
            'name' => 'alpha|required',
            'location' => 'alpha|required',
            'story' => 'required'
        ]);

        $messages = Message::orderBy('created_at')->get();

        return view('index')->with([
            'messages' => $messages,
        ]);
    }

    public function create(Request $request)
    {
        return view('create')->with([
            'name' => $request->session()->get('name', ''),
            'location' => $request->session()->get('location', ''),
            'story' => $request->session()->get('story', ''),
        ]);
    }

    public function store(Request $request)
    {
        $message = new Message();
        $message->name = $request->name;
        $message->location = $request->location;
        $message->story = $request->story;

        $message->save();

        return redirect('/messages')->with([
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

        dump('Added: ' . $message->name);
    }

}





