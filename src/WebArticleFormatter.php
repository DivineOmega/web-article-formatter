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

    public function markdown()
    {
        $output = '';

        foreach($this->article->parts as $part) {
            
            switch(get_class($part)) {

                case Paragraph::class:
                    $output .= $part->content;
                    $output .= PHP_EOL.PHP_EOL;
                    break;

                case Heading::class:
                    $output .= str_repeat('#', $part->level).' '.$part->content;
                    $output .= PHP_EOL.PHP_EOL;
                    break;
            }

        }

        return trim($output);
    }

    public function plainText()
    {
        $output = '';

        foreach($this->article->parts as $part) {
            
            switch(get_class($part)) {

                case Paragraph::class:
                    $output .= $part->content;
                    $output .= PHP_EOL.PHP_EOL;
                    break;

                case Heading::class:
                    $output .= $part->content;
                    $output .= PHP_EOL.PHP_EOL;
                    break;
            }

        }

        return trim($output);
    }

    public function html()
    {
        $output = '';

        foreach($this->article->parts as $part) {
            
            switch(get_class($part)) {

                case Paragraph::class:
                    $output .= '<p>'.htmlentities($part->content).'</p>';
                    $output .= PHP_EOL;
                    break;

                case Heading::class:
                    $output .= '<h'.$part->level.'>'.htmlentities($part->content).'</h'.$part->level.'>';
                    $output .= PHP_EOL;
                    break;
            }

        }

        return trim($output);
    }
}