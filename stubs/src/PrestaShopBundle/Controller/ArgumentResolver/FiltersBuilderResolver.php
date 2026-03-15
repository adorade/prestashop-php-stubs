<?php

namespace PrestaShopBundle\Controller\ArgumentResolver;

/**
 * This argument resolver uses the FiltersBuilderInterface service to automatically
 * instantiate and inject parameters in controllers.
 */
class FiltersBuilderResolver implements \Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * @param FiltersBuilderInterface $builder
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Search\Builder\FiltersBuilderInterface $builder)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function supports(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument)
    {
    }
}
