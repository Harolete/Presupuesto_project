<?php

namespace Tests\Controllers;

use PHPUnit\Framework\TestCase;
use Config\Container\ContainerFactory;
use Src\Controllers\TestController;
// use Psr\Http\Message\ResponseInterface as Response;
use Slim\Psr7\Response ;

// use Slim\Psr7\Response as Psr7Response;

class TestControllerTest extends TestCase {


    public function testReturnHelloName()
    {
        $controller = new TestController();

        $result = $controller->testServer("Harolete",$this->fakeResponse());

        // var_dump($result);
        $this->assertEquals(200,$result->getStatusCode());
    }

    public function fakeResponse()
    {
        return new Response();
    }
}