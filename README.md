# Web Article Formatter

## Installation

```
composer require divineomega/web-article-formatter
```

## Usage

```php
$webArticleFormatter = new WebArticleFormatter($url);

var_dump($webArticleFormatter->plainText());
var_dump($webArticleFormatter->markdown());
var_dump($webArticleFormatter->html());
```