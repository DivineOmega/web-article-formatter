# Web Article Formatter

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

file_put_contents('article.pdf', $formatter->get(Format::PDF));

```