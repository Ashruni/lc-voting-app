<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Idea;
use Illuminate\Http\Response;
class CreateIdea extends Component
{
    public $title;
    public $description;
    public $category=1;
    public function CreateIdea(){
       if(auth()->check()){
        Idea::create([
            'user_id' => auth()->id(),
            'category_id' => $this->category,
            'title' => $this->title,
            'description'=>$this->description,
        ]);
        session()->flash('success_message','Idea was created');
        $this->reset();
        return redirect()->route('index');

    }
    abort(Response::HTTP_FORBIDDEN);

    }

    public function render()
    {
        return view('livewire.create-idea',['categories'=>Category::all()]);
    }
}
