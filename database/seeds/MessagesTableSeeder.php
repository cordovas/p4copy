<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            ['Jill', 'New York', 'I just deleted fox news woohoo!'],
            ['Jamal', 'Los Angeles', 'Way to go!'],
            ['Michael', 'Detroit', 'About Time'],
            ['Pedro', 'Boston', 'I like this!'],
            ['David', 'Austin', 'We love it!'],
            ['Eric', 'Chicago', 'What is next?!'],
        ];

        $count = count($messages);

        foreach ($messages as $key => $messageData) {
            $message = new Message();

            $message->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $message->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $message->name = $messageData[0];
            $message->location = $messageData[1];
            $message->story = $messageData[2];

            $message->save();
            $count--;
        }    }
}
