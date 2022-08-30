<?php

namespace App\Http\Livewire\Chat;

use App\Models\Message;
use App\Models\Room;
use Illuminate\View\View;
use Livewire\Component;

class Messages extends Component
{

    public $room;
    public $messages;


    public function mount($messages, Room $room): void
    {
        $this->messages = $messages;
        $this->room = $room;
    }

    public function getListeners()
    {
        return [
            'message.sent' => 'prependMessage',
            "echo-private:chat.{$this->room->id},messageSent" => 'prependMessageFromBroadcast'
        ];
    }

    public function prependMessageFromBroadcast($payload): void
    {
        $this->prependMessage($payload['message']['id']);
    }

    public function prependMessage(int $id): void
    {
        $this->messages->prepend(Message::find($id));
    }

    public function render(): View
    {
        return view('livewire.chat.messages');
    }
}
