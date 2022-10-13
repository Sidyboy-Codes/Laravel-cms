<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    public function list(){
        return view('messages.list',[
            // fetching all message rows
            'messages'=>Message::all(),
        ]);
    }

    public function delete(Message $message){
        // deleting row from message table
        $message->delete();

        return redirect('/console/messages/list')
            ->with('message', 'Message has been deleted!');

    }

}