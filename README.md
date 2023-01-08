# Laravel JSON Escape

<a href="https://packagist.org/packages/davidvandertuijn/laravel-json-escape"><img src="https://poser.pugx.org/davidvandertuijn/laravel-json-escape/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/laravel-json-escape"><img src="https://poser.pugx.org/davidvandertuijn/laravel-json-escape/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/laravel-json-escape"><img src="https://poser.pugx.org/davidvandertuijn/laravel-json-escape/license.svg" alt="License"></a>

![Laravel JSON Escape](https://cdn.davidvandertuijn.nl/github/laravel-json-escape.png)

Filter JSON response against XSS.

## Install

```
composer require davidvandertuijn/laravel-json-escape
```

## Usage

```php
return response()->json_escape([
    "text" => "<p>Hello World</p>"
]);
```

```json
{"text":"Hello World"}
```

**Exclude**

```php
return response()->json_escape([
    "text" => "Hello World",
    "html" => "<p>Hello World</p>"
], [
    "html"
]);
```

```json
{"text":"Hello World","html":"<p>Hello World</p>"}
```

## References

<a href="https://laravel.com/docs/9.x/responses#json-responses">HTTP Responses - Laravel - The PHP Framework For Web Artisans</a>
