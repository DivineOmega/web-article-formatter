<?php

namespace DivineOmega\WebArticleFormatter;

use DivineOmega\WebArticleFormatter\ArticleParts\Paragraph;
use DivineOmega\WebArticleFormatter\ArticleParts\Heading;


class WebArticleFormatter
{
    private $article;

    public function __construct($url)
    {
        $this->article = (new ArticleRetriever())->get($url);
    }

    public function get($format)
    {
        return $this->article->format($format);
    }

}