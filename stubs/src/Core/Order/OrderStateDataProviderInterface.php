<?php

namespace PrestaShop\PrestaShop\Core\Order;

/**
 * Interface OrderStateDataProviderInterface defines OrderState data provider.
 */
interface OrderStateDataProviderInterface
{
    /**
     * Get order states in given language.
     *
     * @param int $languageId
     *
     * @return array
     */
    public function getOrderStates($languageId);
}
