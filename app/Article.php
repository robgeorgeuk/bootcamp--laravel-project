<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ["content", "title"];

    public function relativeDate()
    {
        return $this->created_at->diffForHumans();
    }
}
