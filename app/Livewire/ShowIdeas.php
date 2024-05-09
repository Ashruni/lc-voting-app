<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Idea;

class ShowIdeas extends Component
{
    public $idea;
    public $voteCount;

    public function mount(Idea $idea){
        $this->idea = $idea;

    }
    public function render()
    {
        return view('livewire.show-ideas');
    }
}
