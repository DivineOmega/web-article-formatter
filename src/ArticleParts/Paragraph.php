<?php

namespace DivineOmega\WebArticleFormatter\ArticleParts;

use DivineOmega\WebArticleFormatter\Interfaces\ArticlePartInterface;

class Paragraph implements ArticlePartInterface
{
    public $content;

    public function __construct($content)
    {
        $this->content = trim($content);
    }
}