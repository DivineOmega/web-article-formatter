<?php

use DivineOmega\WebArticleFormatter\Format;
use DivineOmega\WebArticleFormatter\WebArticleFormatter;

require_once __DIR__.'/vendor/autoload.php';

$formatter = new WebArticleFormatter('https://www.theguardian.com/politics/2018/mar/24/keir-starmer-we-cannot-allow-labour-to-break-apart-over-brexit');

file_put_contents('test.pdf', $formatter->get(Format::PDF));
