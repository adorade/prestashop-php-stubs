<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Grid\Data\Factory;

/**
 * Decorates original grid data and returns modified prices for grid display as well as calculated price with taxes.
 */
class ProductGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @var ShopRepository
     */
    protected $shopRepository;
    /**
     * @var ProductRepository
     */
    protected $productRepository;
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $productGridDataFactory, \PrestaShop\PrestaShop\Core\Localization\Locale\Repository $localeRepository, string $contextLocale, int $defaultCurrencyId, \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer $taxComputer, int $countryId, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory, \Symfony\Contracts\Translation\TranslatorInterface $translator, bool $taxEnabled, bool $isEcotaxEnabled, int $ecoTaxGroupId, \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\Data\GridData
    {
    }
    protected function applyShopModifications(array $products, \PrestaShop\PrestaShop\Core\Grid\Search\ShopSearchCriteriaInterface $searchCriteria): array
    {
    }
}
