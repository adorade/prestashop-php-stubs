<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Exception;

/**
 * Is thrown when customer transformation error occurs
 */
class CustomerTransformationException extends \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerException
{
    /**
     * @var int Code is used when customer which is not guest is being transformed into customer
     */
    public const CUSTOMER_IS_NOT_GUEST = 1;
    /**
     * @var int Code is used when guest transformation into customer has failed
     */
    public const TRANSFORMATION_FAILED = 2;
}
