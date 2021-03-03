<?php

namespace Tests\Container;

use PHPUnit\Framework\TestCase;
use Config\Container\ContainerFactory;
use Psr\Container\ContainerInterface;

class ContainerFactoryTest extends TestCase {

    public function testReturnContainerInterface()
    {
        $Factory = new ContainerFactory();

        $return = $Factory->create();

        $this->assertInstanceOf(ContainerInterface::class, $return);
    }
}