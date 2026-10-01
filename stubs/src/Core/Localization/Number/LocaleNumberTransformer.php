<?php

namespace PrestaShop\PrestaShop\Core\Localization\Number;

class LocaleNumberTransformer
{
    public function __construct(private \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale)
    {
    }
    /**
     * Retrieve locale for numbers.
     * (to avoid use of persian/arabic numbers)
     *
     * @return string
     */
    public function getLocaleForNumberInputs()
    {
    }
}
