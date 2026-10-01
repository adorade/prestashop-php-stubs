<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * This class automatically configures the 'AsCommandHandler' and 'AsQueryHandler' attributes
 * as tags for auto-detection in Symfony.
 *
 * Classes marked with the 'AsCommandHandler' attribute will be registered as command handlers,
 * while classes marked with 'AsQueryHandler' will be registered as query handlers.
 *
 * To make this work, make sure to add the appropriate annotations to the classes that need to
 * be detected as command or query handlers.
 *
 * Usage example:
 *
 *     #[AsCommandHandler]
 *     class MyCommandHandler
 *     {
 *         // ...
 *     }
 *
 *     #[AsQueryHandler]
 *     class MyQueryHandler
 *     {
 *         // ...
 *     }
 *
 * These classes will be automatically discovered and registered in the Symfony service container
 * using the `registerAttributeForAutoconfiguration` method.
 *
 * @see https://symfony.com/doc/current/service_container/tags.html#autoconfiguring-tags-with-attributes
 */
class CommandAndQueryRegisterPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container): void
    {
    }
}
