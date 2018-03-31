# Web Article Formatter

[![StyleCI](https://styleci.io/repos/126647242/shield?branch=master)](https://styleci.io/repos/126647242)

## Installation

```
composer require divineomega/web-article-formatter
```

## Usage

```php
$formatter = new WebArticleFormatter($url);

echo $formatter->get(Format::PLAINTEXT);
echo $formatter->get(Format::MARKDOWN);
echo $formatter->get(Format::HTML);
echo $formatter->get(Format::JSON);

file_put_contents('article.pdf', $formatter->get(Format::PDF));

```