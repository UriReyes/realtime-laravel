<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $user_id = auth()->id();
        $contact_id = $request->contact_id;
        return Message::select('id',DB::raw("IF(`from_id`=$user_id, true, false) as written_by_me"), 'content' ,'created_at')
            ->where(function($query) use($user_id, $contact_id){
                $query->where('from_id',$user_id)->where('to_id',$contact_id);
            })
            ->orWhere(function($query) use($user_id, $contact_id){
                $query->where('from_id',$contact_id)->where('to_id',$user_id);
            })
            ->orderBy('id', 'ASC')
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
