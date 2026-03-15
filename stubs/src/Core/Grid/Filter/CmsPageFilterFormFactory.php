<?php

namespace PrestaShop\PrestaShop\Core\Grid\Filter;

/**
 * Class CmsPageCategoryFilterFormFactory is responsible for changing form action to the custom one.
 */
final class CmsPageFilterFormFactory implements \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface
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
