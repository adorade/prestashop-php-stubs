<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * This class is responsible for preparing multistore elements that will be displayed in the BO
 * It does not control or render a BO page, the items being output are used inside other BO pages.
 */
class MultistoreController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @var MultistoreFeature
     */
    public $multistoreFeature;
    /**
     * @var Context
     */
    public $multistoreContext;
    /**
     * @var EntityManager
     */
    public $entityManager;
    /**
     * @var ProductRepository
     */
    public $productRepository;
    /**
     * This method returns a Response object containing the multistore header displayed at the top of migrated pages
     *
     * @param bool $lockedToAllShopContext
     *
     * @return Response
     */
    public function header(bool $lockedToAllShopContext): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * This method returns a Response object containing the multistore header displayed at the top of product page
     *
     * @param int $productId
     *
     * @return Response
     */
    public function productHeader(int $productId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param ShopConfigurationInterface $configuration
     * @param string $configurationKey
     *
     * @return Response
     */
    public function configurationDropdown(\PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, string $configurationKey): \Symfony\Component\HttpFoundation\Response
    {
    }
}
