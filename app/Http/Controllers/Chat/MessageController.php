<?php

namespace App\Http\Controllers\Chat;

use App\Http\Requests\storeMessageRequest;
use App\Http\Resources\MessageResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{
    // public function store(storeMessageRequest $request)
    // {
	// 	$message = new Message();
	// 	$message->body = $request['body'];
	// 	$message->read = false;
	// 	$message->user_id = auth()->id();
	// 	$message->conversation_id = (int)$request['conversation_id'];
	// 	$message->save();

	// 	$conversation = $message->conversation;

	// 	$user = User::findOrFail($conversation->user_id == auth()->id() ? $conversation->seconde_user_id: $conversation->user_id);
	// 	$user->pushNotification(auth()->user()->name.' send you a message',$message->body,$message);
	// 	return new MessageResource($message);
    // }

}
