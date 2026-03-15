<?php

namespace PrestaShop\PrestaShop\Core\Grid\Filter;

/**
 * Decorates grid filter form action.
 */
final class FilterFormFactoryFormActionDecorator implements \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface
{
    /**
     * @param GridFilterFormFactoryInterface $delegate
     * @param UrlGeneratorInterface $urlGenerator
     * @param string $formActionRoute will change the form action of filters form to this
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $delegate, \Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator, string $formActionRoute)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(\PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinitionInterface $definition)
    {
    }
}
