<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\N8nChat;

class N8nChatController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'session_id' => ['required','string','max:255'], // your column is uuid; this keeps it flexible
            'input'      => ['required','string'],
        ]);

        $chat = N8nChat::create([
            'user_id'    => $request->user()->id,
            'session_id' => $validated['session_id'],
            'input'      => $validated['input'],
            'output'     => '', // DB column is NOT NULL; store empty for now
        ]);

        return response()->json([
            'ok'   => true,
            'id'   => $chat->id,
            'time' => $chat->created_at,
        ]);
    }
}
