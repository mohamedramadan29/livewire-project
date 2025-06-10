<?php

namespace App\Livewire\Dashboard\Messages;

use Livewire\Component;
use App\Models\dashboard\Message;

class MessageShowComp extends Component
{

    public $message;
    public $name;
    public $email;
    public $subject;
    public $body;
    public $status;

    public $listeners = ['ShowMessage'];

    public function ShowMessage($id){
        $this->message = Message::findOrFail($id);
        $this->name = $this->message->name;
        $this->email = $this->message->email;
        $this->subject = $this->message->subject;
        $this->body = $this->message->message;
        $this->status = $this->message->status;
        $this->message->update([
            'status' => '1'
        ]);
        $this->dispatch('ShowModel');
        $this->dispatch('refreshData')->to(MessageDataComp::class);

    }

    public function render()
    {
        return view('dashboard.messages.message-show-comp');
    }
}
