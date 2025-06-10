<?php

namespace App\Livewire\Dashboard\Messages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\dashboard\Message;

class MessageDataComp extends Component
{
    use WithPagination;

    public $search = '';

    public $listeners = ['refreshData'=>'$refresh'];
    public function updatedSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $messages = Message::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('dashboard.messages.message-data-comp', compact('messages'));
    }
}
