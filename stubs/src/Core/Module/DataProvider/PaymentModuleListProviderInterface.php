<?php

namespace PrestaShop\PrestaShop\Core\Module\DataProvider;

/**
 * Interface PaymentModuleProviderInterface defines contract for payment module list provider.
 */
interface PaymentModuleListProviderInterface
{
    /**
     * Get payment module data.
     *
     * @return array
     */
    public function getPaymentModuleList();
}
