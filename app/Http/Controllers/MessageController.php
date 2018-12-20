<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        return "just here";
    }

    public function create(Request $request)
    {
        return view('create');
    }

    public function store(Request $request)
    {
//        dump($request->all());

        $name = ($request->input('name'));
        $location = ($request->input('location'));
        $story = ($request->input('story'));

        return redirect('/messages/create')->with([
            'name' => $name,
            'location' => $location,
            'story' => $story
        ]);
//        return view('create');
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





