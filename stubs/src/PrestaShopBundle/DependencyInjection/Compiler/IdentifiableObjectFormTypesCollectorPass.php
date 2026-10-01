<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Collects the form type classes used by the identifiable object form builders and exposes them
 * through the prestashop.core.form.identifiable_object.form_types parameter, in every environment.
 * The parameter feeds the hook listing commands (dev-only services) and the extra property form catalog.
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
