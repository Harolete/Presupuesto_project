<?php

namespace Src\Controllers;

use Psr\Http\Message\ResponseInterface as Response;

final class TestController
{
    public function testServer($name, Response $response)
    {
        $response->getBody()->write("Hello ${name}");
        return $response;
    }
}