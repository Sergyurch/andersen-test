<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function show()
    {
        $messages = Message::All();

        return view('message.show', ['messages' => $messages]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'message' => 'required|string',
        ]);

        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->text = $request->input('message');
        $message->save();

        return redirect('/');
    }
}
