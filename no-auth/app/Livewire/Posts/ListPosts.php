<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class ListPosts extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::published()->get();
    }

    public function render()
    {
        return view("livewire.posts.list-posts");
    }
}
