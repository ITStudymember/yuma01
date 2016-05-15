<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function getSingleArticle($id)
    {
        return Article::find($id);
    }
}
