<?php

namespace PrestaShopBundle\DependencyInjection;

final class RuntimeConstEnvVarProcessor implements \Symfony\Component\DependencyInjection\EnvVarProcessorInterface
{
    public function getEnv($prefix, $name, \Closure $getEnv)
    {
    }
    public static function getProvidedTypes()
    {
    }
}
