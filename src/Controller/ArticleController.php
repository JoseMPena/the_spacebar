<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello World!');
    }

    /**
    * @Route("/news/{article_slug}")
    */
    public function show($article_slug)
    {
      return new Response(sprintf('Future article: "%s"', $article_slug));
    }
}
