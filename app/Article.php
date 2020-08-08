<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function tag(){

        return $this->belongsToMany(Tag::class);

    }

    public function getAuthor($article)
    {
        return ucwords(strtolower($this->user->name));
    }

    public function getCommentNumber($article)
    {
        return $this->comment->count();
    }

    public function created_at($time){
        $time = new Carbon($time);
        $time->toDateTimeString();
        return $time;
    }
}

