<?php

namespace Nece\Brawl\Sms;

use Nece\Brawl\ConfigAbstract;
use ReflectionClass;

class Factory
{
    public static function create(ConfigAbstract $config)
    {
        $class = new ReflectionClass($config);
        $namespace = $class->getNamespaceName();
        $parts = explode('\\', $namespace);
        $parts[count($parts) - 1] = 'Sender';

        
    }
}
