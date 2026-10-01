<?php

namespace PrestaShopBundle\DependencyInjection;

/**
 * Adds main PrestaShop core services to the Symfony container.
 */
class PrestaShopExtension extends \Symfony\Component\HttpKernel\DependencyInjection\Extension implements \Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, \Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConfiguration(array $config, \Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAlias(): string
    {
    }
    public function prepend(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
    protected function preprendSessionConfig(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
    protected function getCookieSameSite(): string
    {
    }
    protected function getAdminCookieLifetime(): int
    {
    }
    protected function preprendApiConfig(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
