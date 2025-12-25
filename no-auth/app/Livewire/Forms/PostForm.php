<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\Rule;
use Livewire\Form;

class PostForm extends Form
{
    public $title = "";
    public $content = "";

    protected function rules(): array
    {
        return [
            "title" => ["required", "min:5", Rule::exists("posts", "title")],
            "content" => ["required", "min:10"],
        ];
    }
}
