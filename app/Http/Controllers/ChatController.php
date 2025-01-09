<?php

// app/Http/Controllers/ChatController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Message; // Assuming you have a Message model

class ChatController extends Controller
{
    public function sendMessage(Request $request, $id)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $group = Group::findOrFail($id);

        // Create a new message
        $message = new Message();
        $message->group_id = $group->id;
        $message->user_id = auth()->id(); // Assuming the user is authenticated
        $message->content = $request->message;
        $message->save();

        return response()->json(['success' => true]);
    }
}
