<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Related;
use App\Models\User;
use Livewire\Component;

class Test extends Component
{

    public $company;
    public $something;
    public function mount()
    {
        $this->user = User::find(1);
        $this->company = $this->user->company->first();
        $this->other = $this->company->other;
        // dd(auth()->user()->company); 
        // correctly shows the 1 related company
    }


    public function submit()
    {
        // incorrectly shows all companies
        dd(auth()->user()->company);
    }

    public function render()
    {
        return view('livewire.test');
    }
}
