<?php

namespace PrestaShop\PrestaShop\Adapter\SpecificPrice;

/**
 * @deprecated since 8.0.0 and will be removed in the next major version.
 * @see SpecificPriceValidator
 * @see SpecificPriceRepository
 */
abstract class AbstractSpecificPriceHandler
{
    /**
     * Gets legacy SpecificPrice object
     *
     * @param SpecificPriceId $specificPriceId
     *
     * @return SpecificPrice
     *
     * @throws SpecificPriceException
     * @throws SpecificPriceNotFoundException
     */
    protected function getSpecificPrice(\PrestaShop\PrestaShop\Core\Domain\SpecificPrice\ValueObject\SpecificPriceId $specificPriceId): \SpecificPrice
    {
    }
    /**
     * Checks if date range values are not inverse. (range from not bigger than range to)
     *
     * @param DateTime $from
     * @param DateTime $to
     *
     * @throws SpecificPriceConstraintException
     */
    protected function assertDateRangeIsNotInverse(\DateTime $from, \DateTime $to)
    {
    }
}
