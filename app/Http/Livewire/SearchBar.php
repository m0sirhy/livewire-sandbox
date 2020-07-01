<?php

namespace App\Http\Livewire;
use App\Client;
use Livewire\Component;

class SearchBar extends Component
{
    public $query;
    public $clients;
    public function mount(){
        $this->query='';
        $this->clients=[];
    }


    public function updatedQuery(){

$this->clients=Client::where('full_name' ,'like','%'.$this->query.'%')
    ->get()
    ->toArray();
    }
    public function render()
    {
        return view('livewire.search-bar');
    }
}
