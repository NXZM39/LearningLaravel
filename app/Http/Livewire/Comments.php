<?php

namespace App\Http\Livewire;
use App\Models\Comment;
use Livewire\Component;
use Livewire\withPagination;
use Carbon\Carbon;



class Comments extends Component
{
   // public $comments;
    public $newComment;


    public function updated($field)
    {
        $this->validateOnly($field, ['newComment' =>'required|max:255']);
    }



    public function addComment()
    {
        $this->validate(['newComment' =>'required|max:255']);

        if($this->newComment == '') {
            return;
        }

        $createdComment = Comment::create(['body'=>$this->newComment,'user_id'=>1]);

        //$this->comments->prepend($createdComment);
        $this->newComment = "";
        session()->flash('message','Comment added successfully :)');

    }

    public function remove($commentId)
    {
        $comment = Comment::find($commentId);
        $comment->delete();
        //$this->comments = $this->comments->except($commentId);
        session()->flash('message','Comment is  deleted :(');
        //dd($comment);
    }


    public function render()
    {
        return view('livewire.comments',[
            'comments'=> Comment::latest()->paginate(20)
        ]);
    }
}
