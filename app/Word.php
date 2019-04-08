<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Word extends Model
{
    use softDeletes;

    protected $fillable = ['title', 'kanji', 'hiragana', 'note', 'slug'];

    protected $dates = ['delete-at'];
}
