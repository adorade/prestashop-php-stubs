<?php

namespace PrestaShop\PrestaShop\Adapter\Module;

/**
 * Class PaymentModuleListProvider is responsible for providing payment module list.
 */
final class PaymentModuleListProvider implements \PrestaShop\PrestaShop\Core\Module\DataProvider\PaymentModuleListProviderInterface
{
    /**
     * @param ModuleRepositoryInterface $moduleRepository
     * @param ModuleEntityRepository $moduleEntityRepository
     * @param int $shopId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Module\ModuleRepositoryInterface $moduleRepository, \PrestaShopBundle\Entity\Repository\ModuleRepository $moduleEntityRepository, int $shopId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPaymentModuleList()
    {
    }
}
