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

    public function format($format)
    {
        $output = '';

        foreach($this->parts as $part) {
            $output .= $part->format($format);
        }

        return trim($output);
    }
}