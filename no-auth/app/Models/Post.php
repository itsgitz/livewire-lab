<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title", "content", "is_published"];

    public function scopeUnpublished(Builder $query)
    {
        return $query->where("is_published", false);
    }

    public function scopePublished(Builder $query)
    {
        return $query->where("is_published", true);
    }

    public function publish(string $id)
    {
        $this::find($id)->update(["is_published" => true]);
    }
}
