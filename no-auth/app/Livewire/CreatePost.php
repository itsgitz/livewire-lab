<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreatePost extends Component
{
    public PostForm $form;

    public function save()
    {
        $validated = $this->validate();

        Post::create($validated);

        session()->flash("success", "Post created successfully!");

        return $this->redirect("/posts");
    }

    #[Title("Create Post")]
    public function render()
    {
        return view("livewire.create-post");
    }
}
