<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersMessages;

class UserMessagesController extends Controller
{
    public function index()
    {
        $UsersMessagesArr = UsersMessages::all();
        return view('welcome', ['usersMessagesArr' => $UsersMessagesArr]);
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',    
            'message' => 'required|max:255'
        ]);

        $userMessage = new UsersMessages();
        $userMessage->name = request('name');
        $userMessage->email = request('email');
        $userMessage->message = request('message');

        $userMessage->save();
        return redirect('/');
    }
}
