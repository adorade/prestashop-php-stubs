<?php

namespace PrestaShop\PrestaShop\Core\Localization\RTL;

/**
 * Interface StyleSheetProcessorFactoryInterface creates RTL stylesheet processor.
 */
interface StyleSheetProcessorFactoryInterface
{
    /**
     * @return Processor
     */
    public function create();
}
