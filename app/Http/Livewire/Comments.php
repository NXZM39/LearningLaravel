<?php

namespace App\Http\Livewire;


use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\withPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;




class Comments extends Component
{
    use withPagination;
   // public $comments;
   protected $paginationTheme = 'bootstrap';
    public $newComment;
    public $image;

    protected $listeners = ['fileUpload' => 'handleFileUpload'];

    public function handleFileUpload($imageData)
    {

       $this->image =$imageData;
    }

    public function updated($field)
    {
        $this->validateOnly($field, ['newComment' =>'required|max:255']);
    }



    public function addComment()
    {

        $this->validate(['newComment' =>'required|max:255']);

        $image = $this->storeImage();

        if($this->newComment == '') {
            return;
        }

        $createdComment = Comment::create([

            'body'=>$this->newComment,'user_id'=>1,
            'image'=>$image


        ]);

        //$this->comments->prepend($createdComment);
        $this->newComment = "";
        session()->flash('message','Comment added successfully :)');

    }

    public function storeImage()
    {
        if(!$this->image)
        return null;
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
            'comments'=> Comment::latest()->paginate(2)
        ]);
    }
}
