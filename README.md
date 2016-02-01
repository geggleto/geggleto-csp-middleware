# CSP Middleware

Extends CSPBuild to provide an invokable interface for PSR-7 Middleware Stacks


# Usage
```php
//Examples written to use Slim 3
$cspMiddleware = CSPMiddleware::fromFile('/path/to/source.json');

//App Middleware
$app->add($cspMiddleware);

//Route Middleware
$app->get(''...)->add($cspMiddleware);
```