<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\Command;

/**
 * Adds new tax
 */
class AddTaxCommand
{
    /**
     * @param array $localizedNames
     * @param float $rate
     * @param bool $enabled
     */
    public function __construct(array $localizedNames, $rate, $enabled)
    {
    }
    /**
     * @return array
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @return float
     */
    public function getRate()
    {
    }
    /**
     * @return bool
     */
    public function isEnabled()
    {
    }
    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
    }
}
