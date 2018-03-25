<?php

namespace DivineOmega\WebArticleFormatter;

use DivineOmega\WebArticleFormatter\Interfaces\ArticlePart;
use DivineOmega\WebArticleFormatter\Interfaces\ArticlePartInterface;


class Article
{
    public $parts = [];

    public function addPart(ArticlePartInterface $part) 
    {
        $this->parts[] = $part;
    }
}