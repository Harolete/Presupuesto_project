<?php

namespace Config\Container;
use Psr\Container\ContainerInterface;

class ContainerFactory {

    /**
     * @return ContainerInterface
     */
    public static function create() {
        $containerBuilder = new \DI\ContainerBuilder();

        $containerBuilder->addDefinitions(dirname(__FILE__).'./../GlobalConfig.php');

       return $containerBuilder->build();
    }
}