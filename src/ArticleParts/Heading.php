<?php

namespace DivineOmega\WebArticleFormatter\ArticleParts;

use DivineOmega\WebArticleFormatter\Interfaces\ArticlePartInterface;

class Heading implements ArticlePartInterface
{
    public $content;
    public $level;

    public function __construct($content)
    {
        $this->content = trim($content);
    }

    public function setLevel($level)
    {
        $this->level = (int) $level;
    }
}