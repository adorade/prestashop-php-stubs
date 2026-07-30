<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Load every flagged Translation providers.
 */
class PopulateTranslationProvidersPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public const DEFINITION = 'prestashop.translation.translations_factory';
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
