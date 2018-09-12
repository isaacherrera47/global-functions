<?php

namespace Arq;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return array(
            new TwigFunction('global_asset', array(AppRuntime::class, 'getGlobalAsset'))
        );
    }

}