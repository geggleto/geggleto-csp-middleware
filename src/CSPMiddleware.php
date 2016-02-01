<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2016-02-01
 * Time: 12:50 PM
 */

namespace Geggleto\CSPBuilder;


use ParagonIE\CSPBuilder\CSPBuilder;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class CSPMiddleware extends CSPBuilder
{
    public function __invoke(ServerRequestInterface $requestInterface, ResponseInterface $responseInterface, callable $next) {
        $response = $next($requestInterface, $responseInterface);

        return $this->injectCSPHeader($response);
    }
}