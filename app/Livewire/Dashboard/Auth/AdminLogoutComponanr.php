<?php

namespace App\Livewire\Dashboard\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminLogoutComponanr extends Component
{
    public function logout(){
        Auth::guard('admin')->logout();
        return to_route('dashboard.login');
    }
    public function render()
    {
        return view('dashboard.auth.admin-logout-componanr');
    }
}
