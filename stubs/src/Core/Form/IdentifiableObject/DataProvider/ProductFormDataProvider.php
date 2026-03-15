<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides the data that is used to prefill the Product form
 */
class ProductFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param ConfigurationInterface $configuration
     * @param int $contextLangId
     * @param int $defaultShopId
     * @param int|null $contextShopId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, int $contextLangId, int $defaultShopId, ?int $contextShopId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($id): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData(): array
    {
    }
    /**
     * @param int $productId
     * @param ShopConstraint $shopConstraint
     *
     * @return array<int, array<string, int|string>>
     */
    protected function extractPackedProducts(int $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
}
