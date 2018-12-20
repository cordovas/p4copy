<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'alpha|required',
            'location' => 'alpha|required',
            'story' => 'required'
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->location = $request->location;
        $message->story = $request->story;

        $message->save();



        $messages = Message::all();
//        $messages = Message::orderBy('created_at')->get();

        return view('index')->with([
            'messages' => $messages
        ]);

//        return redirect('/messages/{id}/edit')->with([
//            'alert' => 'Your message was added.'
//        ]);

//        return redirect('/messages/{{$id}}/edit')->with([
//            'messages' => $messages
//        ]);
    }

    public function create(Request $request)
    {


        return view('create');
    }

    public function index(Request $request)
    {
        $messages = Message::all();

        return view('index')->with([
            'messages' => $messages
        ]);
    }

    public function crud($id)
        {
            $message = Message::find($id);
            return view('crud')->with([
                'message' => $message
            ]);
        }

    public function editMessage($id)
    {
        $message = Message::find($id);
//        $messagesForContact = $contact->messages()->pluck('messages.id')->toArray();
        return view('edit')->with([
            'message' => $message

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





