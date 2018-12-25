<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Tag;

class MessageController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'location' => 'string|required',
            'story' => 'string|required|max:500'
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->location = $request->location;
        $message->story = $request->story;

        $message->save();

        $messages = Message::all();

        return redirect('/messages/')->with([
            'alert' => 'Your message was added.'
        ]);
    }

    public function create(Request $request)
    {
        return view('create');
    }

    public function index(Request $request)
    {
        $messages = Message::all();
        $tags = Tag::getForCheckboxes();

        return view('index')->with([
            'messages' => $messages,
            'tags' => $tags,

        ]);
    }

    public function editMessage($id = null)
    {
        $message = Message::find($id);

        $tags = Tag::getForCheckboxes();

        $tagsForThisMessage = $message->tags->pluck('id')->toArray();

        return view('edit')->with([
            'message' => $message,
            'tags' => $tags,
            'tagsForThisMessage' => $tagsForThisMessage
        ]);
    }

    public function updateMessage(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|required',
            'location' => 'string|required',
            'story' => 'string|required|max:500'
        ]);

        $message = Message::find($id);

        $message->tags()->sync($request->tags);

        $message->name = $request->name;
        $message->location = $request->location;
        $message->story = $request->story;
        $message->save();

        return redirect('/messages/')->with([
            'alert' => 'Your changes were saved.'
        ]);
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $message->tags()->detach();
        $message->delete();

        return redirect('/messages');
    }

    public function about()
    {
        return view('about');
    }

}







