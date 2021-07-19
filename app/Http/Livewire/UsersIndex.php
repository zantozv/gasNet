<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'LIKE' , '%'. $this->search . '%')
                   ->orwhere('email', 'LIKE' , '%'. $this->search . '%')->paginate();

        return view('livewire.users-index', compact('users'));
    }
}
