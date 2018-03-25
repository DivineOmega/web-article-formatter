<?php

namespace DivineOmega\WebArticleFormatter\ArticleParts;

use DivineOmega\WebArticleFormatter\Exceptions\InvalidFormatException;
use DivineOmega\WebArticleFormatter\Format;
use DivineOmega\WebArticleFormatter\Interfaces\ArticlePartInterface;

class Paragraph implements ArticlePartInterface
{
    public $content;

    public function __construct($content)
    {
        $this->content = trim($content);
    }

    public function format($format)
    {
        switch ($format) {

            case Format::MARKDOWN:
                return $this->content.PHP_EOL.PHP_EOL;
                break;

            case Format::PLAINTEXT:
                return $this->content.PHP_EOL.PHP_EOL;
                break;

            case Format::HTML:
                return '<p>'.$this->content.'</p>'.PHP_EOL;
                break;

            default:
                throw new InvalidFormatException();
                break;
        }
    }
}
