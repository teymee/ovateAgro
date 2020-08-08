<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded =[];

    public function article(){

        return $this->belongsToMany(Article::class);

    }

    public function getTagCount($tag)
    {
        return $this->article->count();
    }
}
