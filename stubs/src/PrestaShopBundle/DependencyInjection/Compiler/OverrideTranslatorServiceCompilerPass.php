<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * On Symfony 3.x, the parameters like `translator.class` are not used anymore and cannot override the original services.
 * This made the translations unavailable in prod mode, and the module page was crashing.
 * This class replaces the symfony translator with PrestaShop's extended one when in prod mode.
 */
class OverrideTranslatorServiceCompilerPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
