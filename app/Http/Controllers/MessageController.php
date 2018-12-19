<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return view('layouts.show')->with([
            'totalNumbers' => $request->session()->get('totalNumbers', ''),
            'randomNumbers' => $request->session()->get('randomNumbers', ''),
            'showOdds' => $request->session()->get('showOdds', ''),
            'lotteryList' => $request->session()->get('lotteryList', ''),
            'oddResults' => $request->session()->get('oddResults', '')
        ]);
    }
}
