<?php

namespace PrestaShop\PrestaShop\Core\Order;

/**
 * Interface OrderReturnStateDataProviderInterface defines OrderReturnState data provider.
 */
interface OrderReturnStateDataProviderInterface
{
    /**
     * Get order return states in given language.
     *
     * @param int $languageId
     *
     * @return array
     */
    public function getOrderReturnStates($languageId);
}
