<?php

namespace App\Livewire\Dashboard\Subscribers;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\dashboard\Subscriber;

class SubscribersDataComp extends Component
{

    use WithPagination;
    public $search;
    public $listeners = ['RefreshData'=>'$refresh'];


    public function updatedSearch()
    {
        $this->resetPage();
    }




    public function render()
    {
        $subscribers = Subscriber::where('email', 'like', '%' . $this->search . '%')
        ->orderBy('id','desc')->paginate(1);
        return view('dashboard.subscribers.subscribers-data-comp', compact('subscribers'));
    }
}
