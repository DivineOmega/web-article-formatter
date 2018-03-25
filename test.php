<?php

use DivineOmega\WebArticleFormatter\WebArticleFormatter;

require_once __DIR__.'/vendor/autoload.php';

$webArticleFormatter = new WebArticleFormatter('https://www.theguardian.com/politics/2018/mar/24/keir-starmer-we-cannot-allow-labour-to-break-apart-over-brexit');

var_dump($webArticleFormatter->html());
