<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Exception;

/**
 * This exception is thrown when you try to associate a FeatureValue to Feature which
 * it doesn't belong to.
 */
class InvalidAssociatedFeatureException extends \PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Exception\ProductFeatureValueException
{
}
