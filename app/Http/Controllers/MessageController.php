<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index()
    {
        $user_id = auth()->id();
        return Message::select('id',DB::raw("IF(`from_id`=$user_id, true, false) as written_by_me"), 'content' ,'created_at')
            ->where('from_id', '=', auth()->id())
            ->orWhere('to_id', '=', auth()->id())
            ->get();
    }

    public function store(Request $request)
    {
        $message = new Message;
        $message->from_id = auth()->id();
        $message->to_id = $request->to_id;
        $message->content = $request->content;
        $saved = $message->save();

        $data = [];
        $data['success'] = $saved;
        return $data;
    }
}
