<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChatController extends Controller
{
    public function index(): View
    {
        $rooms = Room::all();

        return view('chat', compact('rooms'));
    }

    public function show(Room $room): View
    {
        $messages = $room->messages()->with(['user'])->latest()->get();

        return view('chat.room', compact('room', 'messages'));
    }
}
