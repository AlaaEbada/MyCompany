<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class CommentSection extends Component
{
    public $comment;
    public $reply;
    public $commentId;
    public $post_id;


    public function add_comment()
    {
        if (Auth::check()) {

            if ($this->comment) {

                $user = Auth::user();
                $comment = new Comment;
                $comment->name = $user->name;
                $comment->comment = $this->comment;
                $comment->user_id = $user->id;
                $comment->post_id = $this->post_id;

                $comment->save();

                $this->comment = '';


                session()->flash('message', 'Comment added successfully!');
            } else {
                session()->flash('error', 'Comment cannot be empty!');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function add_reply()
    {
        if (Auth::check()) {

            if ($this->reply && $this->commentId) {
                $user = Auth::user();
                $reply = new Reply;
                $reply->name = $user->name;
                $reply->reply = $this->reply;
                $reply->user_id = $user->id;
                $reply->comment_id = $this->commentId;

                $reply->save();

                $this->reply = '';

                session()->flash('message', 'Reply added successfully!');
            } else {
                session()->flash('error', 'Reply cannot be empty!');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function toggle_reply_form($commentId)
    {
        $this->commentId = ($this->commentId === $commentId) ? null : $commentId;
    }

    public function close_reply_form()
    {
        $this->commentId = null;
    }


    public function clear_message()
    {
        session()->forget('message');
    }

    public function clear_error()
    {
        session()->forget('error');
    }


    // Comment Confirm Delete

    #[On('commentConfirmAction')]
    public function commentConfirmAction($id)
    {
        $comment = Comment::find($id);
        if ($comment) {
            $comment->delete();
            $this->dispatch('alert', type: 'success', title: 'Comment deleted successfully!');
        } else {
            $this->dispatch('alert', type: 'error', title: 'Comment not found!');
        }
    }

    #[On('commentActionCancel')]
    public function commentCancelAction($id)
    {
        $this->dispatch('alert', type: 'info', title: 'Action canceled.');
    }

    public function commentDelete($id)
    {
        if (Auth::check())
        {
            $this->dispatch(
                'DeleteConfirm',
                type: 'warning',
                title: 'Confirm Deletion',
                message: 'Are you sure you want to delete this comment?',
                id: $id
            );
        } else {
            redirect('/login');
        }
    }



    // Reply Confirm Delete

    public function replyDelete($id)
    {
        if (Auth::check())
        {
            $this->dispatch(
                'DeleteConfirm2',
                type: 'warning',
                title: 'Confirm Deletion',
                message: 'Are you sure you want to delete this Reply?',
                id: $id
            );
        } else {
            redirect('/login');
        }
    }

    #[On('replyConfirmAction')]
    public function replyConfirmAction($id)
    {
        $reply = Reply::find($id);
        if ($reply) {
            $reply->delete();
            $this->dispatch('alert', type: 'success', title: 'Reply deleted successfully!');
        } else {
            $this->dispatch('alert', type: 'error', title: 'Reply not found!');
        }
    }

    #[On('commentActionCancel')]
    public function ReplyCancelAction($id)
    {
        $this->dispatch('alert', type: 'info', title: 'Action canceled.');
    }



    public function render()
    {
        return view('livewire.comment-section', [
            'comments' => Comment::where('post_id', $this->post_id)->latest()->get(),
            'replies' => Reply::all(),
        ]);
    }
}
