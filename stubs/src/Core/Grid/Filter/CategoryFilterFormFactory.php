<?php

namespace PrestaShop\PrestaShop\Core\Grid\Filter;

/**
 * Class CategoryFilterFormFactory decorates original filter factory to add custom submit action.
 */
final class CategoryFilterFormFactory implements \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface
{
    /**
     * @param GridFilterFormFactoryInterface $formFactory
     * @param UrlGeneratorInterface $urlGenerator
     * @param RequestStack $requestStack
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $formFactory, \Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator, \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(\PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinitionInterface $definition)
    {
    }
}
