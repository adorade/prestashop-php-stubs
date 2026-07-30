<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Collects services information which contains hooks.
 */
class IdentifiableObjectFormTypesCollectorPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public const IDENTIFIABLE_OBJECT_SERVICE_NAME_START_WITH = 'prestashop.core.form.identifiable_object.builder';
    public const ALTERNATIVE_IDENTIFIABLE_OBJECT_SERVICE_STARTS_WITH = 'prestashop.core.form.builder';
    public const GRID_DEFINITION_SERVICE_STARTS_WITH = 'prestashop.core.grid.definition';
    public const FORM_TYPE_POSITION_IN_CONSTRUCTOR_OF_FORM_BUILDER = 0;
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
