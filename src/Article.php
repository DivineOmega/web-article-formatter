<?php

namespace DivineOmega\WebArticleFormatter;

use DivineOmega\WebArticleFormatter\Interfaces\ArticlePart;
use DivineOmega\WebArticleFormatter\Interfaces\ArticlePartInterface;
use Dompdf\Dompdf;


class Article
{
    public $parts = [];

    public function addPart(ArticlePartInterface $part) 
    {
        $this->parts[] = $part;
    }

    public function format($format)
    {
        if ($format==Format::PDF) {
            return $this->formatPDF();
        }

        $output = '';

        foreach($this->parts as $part) {
            $output .= $part->format($format);
        }

        return trim($output);
    }

    private function formatPDF()
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($this->format(Format::HTML));
        $dompdf->render();
        return $dompdf->output();
    }
}