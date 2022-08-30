<?php

namespace App\Http\Livewire\Chat;

use App\Events\messageSent;
use App\Models\Room;
use Livewire\Component;

class SendMessage extends Component
{
    public $body = '';
    public $room;

    public function mount(Room $room)
    {
        $this->room = $room;
    }

    public function send()
    {
        $message = $this->room->messages()->create([
            'body' => $this->body,
            'user_id' => auth()->user()->id
        ]);

        $this->emit('message.sent', $message->id);

        broadcast(new messageSent($this->room, $message))->toOthers();

        $this->body = '';
    }

    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
