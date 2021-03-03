<?php

namespace Src\Controllers;

use Psr\Http\Message\ResponseInterface as Response;

final class TestController
{
    public function testServer($name, Response $response)
    {
        var_dump("hola");
        $response->getBody()->write("Hello ${name}");
        return $response;
    }
}