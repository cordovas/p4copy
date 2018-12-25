<?php

use Illuminate\Database\Seeder;
use App\Message;
use App\Tag;

class MessageTagTableSeeder extends Seeder
{

    public function run()
    {

        $messages =[
            'Jill' => ['Spouse'],
            'Jamal' => ['Spouse', 'Friends'],
        ];

        # Now loop through the above array, creating a new pivot for each book to tag
        foreach ($messages as $name => $tags) {

            $message = Message::where('name', 'like', $name)->first();;


            foreach ($tags as $tagName) {
                $tag = Tag::where('name', 'like', $tagName)->first();;


                # Connect this tag to this book
                $message->tags()->save($tag);
            }
        }
    }
}


