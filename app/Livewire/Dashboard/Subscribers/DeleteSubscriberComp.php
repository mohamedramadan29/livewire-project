<?php

namespace App\Livewire\Dashboard\Subscribers;

use Livewire\Component;
use App\Models\dashboard\Subscriber;

class DeleteSubscriberComp extends Component
{
    public $listeners = ['SubscribeDelete'];
    public $subscriber;
    public $email;
    public function SubscribeDelete($id)
    {
        $this->subscriber = Subscriber::find($id);
        ####### Show model To Confirm Delete
        $this->dispatch('DeleteModel');
        $this->email = $this->subscriber->email;
    }

    public function submit(){
        $this->subscriber->delete();
        ######## Reset Data
        $this->reset(['subscriber']);
        ##### Hide Model ####
        $this->dispatch('DeleteModel');
        ####### Refresh Compnant In Page
        $this->dispatch('RefreshData')->to(SubscribersDataComp::class);
    }
    public function render()
    {
        return view('dashboard.subscribers.delete-subscriber-comp');
    }
}
