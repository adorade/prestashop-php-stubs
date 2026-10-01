<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Exception;

class CannotUpdateCarrierException extends \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierException
{
    /**
     * When generic carrier update fails
     */
    public const FAILED_UPDATE_CARRIER = 1;
}
