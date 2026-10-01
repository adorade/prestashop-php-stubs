<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for category add/edit category forms
 */
final class CategoryFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, private readonly \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider $groupDataProvider, private readonly \PrestaShop\PrestaShop\Adapter\Shop\Url\CategoryProvider $categoryProvider, private readonly \Symfony\Component\Routing\Router $router, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($categoryId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
