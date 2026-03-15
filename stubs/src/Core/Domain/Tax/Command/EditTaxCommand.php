<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\Command;

/**
 * Edits given tax with provided data
 */
class EditTaxCommand
{
    /**
     * @param int $taxId
     *
     * @throws TaxException
     */
    public function __construct($taxId)
    {
    }
    /**
     * @return TaxId
     */
    public function getTaxId()
    {
    }
    /**
     * @return array|null
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @param array|null $localizedNames
     *
     * @return self
     */
    public function setLocalizedNames($localizedNames)
    {
    }
    /**
     * @return float|null
     */
    public function getRate()
    {
    }
    /**
     * @param float|null $rate
     *
     * @return self
     */
    public function setRate($rate)
    {
    }
    /**
     * @return bool|null
     */
    public function isEnabled()
    {
    }
    /**
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
    }
}
