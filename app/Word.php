<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['title', 'kanji', 'hiragana', 'note'];
}
