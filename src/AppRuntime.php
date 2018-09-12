<?php

namespace Arq;

use Twig\Extension\RuntimeExtensionInterface;

class AppRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        /**
         * Pending to implement injected services
         */
    }

    public function getGlobalAsset($name)
    {
        return strtoupper($name);
    }
}