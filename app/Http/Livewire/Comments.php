<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Psy\TabCompletion\Matcher\FunctionsMatcher;
use Illuminate\Support\Carbon;
use App\Models\comment;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    // public $comments;
    public $newcomment;
    public $search;
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.comments',['comments' => comment::with('User')->where('comment', 'like', '%'.$this->search.'%')->latest()->paginate(3)]);
    }

    public function mount()
    {
        // $dbComments = comment::with('User')->latest()->get();
        // $this->comments = $dbComments;
    }

    public function addComment(){
        $this->validate([
            'newcomment' => 'required|max:255'
        ]);

        $createComment = comment::create([
            'comment' => $this->newcomment,
            'user_id' => 1
        ]);
        // $this->comments->prepend($createComment);

        $this->newcomment = '';

    }

    public function removeMessage($id){
       $deletMessage =  comment::find($id);
       $deletMessage->delete();
    }
}
