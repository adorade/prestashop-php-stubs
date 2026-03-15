<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Data provider for new Architecture, about Product object model.
 *
 * This class will provide data from DB / ORM about Products for the Admin interface.
 * This is an Adapter that works with the Legacy code and persistence behaviors.
 */
class AdminProductDataProvider extends \PrestaShop\PrestaShop\Adapter\Admin\AbstractAdminQueryBuilder implements \PrestaShopBundle\Service\DataProvider\Admin\ProductInterface
{
    public function __construct(\Doctrine\ORM\EntityManager $entityManager, \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager, \Psr\Cache\CacheItemPoolInterface $cache)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPersistedFilterParameters()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isCategoryFiltered()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isColumnFiltered()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function persistFilterParameters(array $parameters)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function combinePersistentCatalogProductFilter($paramsIn = [], $avoidPersistence = false)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCatalogProductList($offset, $limit, $orderBy, $sortOrder, $post = [], $avoidPersistence = false, $formatCldr = true)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function countAllProducts()
    {
    }
    /**
     * Translates new Core route parameters into their Legacy equivalent.
     *
     * @param string[] $coreParameters The new Core route parameters
     *
     * @return array<string, int|string> The URL parameters for Legacy URL (GETs)
     */
    public function mapLegacyParametersProductForm($coreParameters = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPaginationLimitChoices()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isNewProductDefaultActivated()
    {
    }
}
