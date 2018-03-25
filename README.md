# Web Article Formatter

## Installation

```
composer require divineomega/web-article-formatter
```

## Usage

```php
$webArticleFormatter = new WebArticleFormatter($url);

$webArticleFormatter->get(Format::PLAINTEXT);
$webArticleFormatter->get(Format::MARKDOWN);
$webArticleFormatter->get(Format::HTML);

file_put_contents('article.pdf', $webArticleFormatter->get(Format::PDF));

```