<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    /**
     * As per-documentation:
     * "If you are using a rules() method to declare your validation rules
     * for a property instead of the #[Validate] attribute, you can still include
     * a #[Validate] attribute with no parameters to retain the real-time
     * validating behavior"
     */
    #[Validate]
    public $title = "";

    #[Validate]
    public $content = "";

    protected function rules(): array
    {
        return [
            "title" => ["required", "min:5", Rule::exists("posts", "title")],
            "content" => ["required", "min:10"],
        ];
    }
}
