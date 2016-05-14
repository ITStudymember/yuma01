<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogsController extends Controller
{
    //
    /**
     * 新しい記事の登録
     *
     * @param $request
     * @return mixed
     *
     */
    public function postArticle(Request $request)
    {
        $article = new Article();

        $article->title = $request->title;
        $article->body = $request->body;

        $article->save();

        return redirect('/');
    }
}
