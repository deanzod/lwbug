<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Related;
use App\Models\User;
use Livewire\Component;

class Test extends Component
{

    public $companies;
    public $something;

    public function mount()
    {
        $this->user = User::find(1);
        $this->companies = $this->user->companies->first();
        $this->other = $this->companies->others;

        // dd(auth()->user()->companies); 
        // correctly shows the 1 related company
    }


    public function submit()
    {
        // incorrectly shows all companies
        dd(auth()->user()->companies);
    }

    public function render()
    {
        return view('livewire.test');
    }
}
