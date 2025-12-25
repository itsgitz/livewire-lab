<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

class ListDraftedPosts extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::unpublished()->get();
    }

    public function publish(string $id)
    {
        $post = Post::findOrfail($id);
        $post->publish($post->id);

        session()->flash("success", "Post published successfully");

        return redirect()->route("posts.drafted");
    }

    #[Title("Drafted Posts")]
    public function render()
    {
        return view("livewire.posts.list-drafted-posts");
    }
}
