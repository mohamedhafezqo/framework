<?php

namespace App\Controllers;

use App\Services\ArticleService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Article;

class ArticleController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $articles = Article::all();

        return new Response($articles, Response::HTTP_OK);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function show(Request $request)
    {
        $article = Article::findOrFail((int) $request->get('id'));

        return new Response($article, Response::HTTP_OK);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function post(Request $request)
    {
        $article = new Article();
        $article->title = $request->headers->get('title');
        $article->description = $request->headers->get('description');
        $article->save();

        return new Response($article, Response::HTTP_CREATED);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function delete(Request $request)
    {

        $article = Article::findOrFail($request->get('id'));
        $article->delete();

        return new Response('', Response::HTTP_NO_CONTENT);
    }
}