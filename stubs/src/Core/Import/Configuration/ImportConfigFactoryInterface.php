<?php

namespace PrestaShop\PrestaShop\Core\Import\Configuration;

/**
 * Interface ImportConfigFactoryInterface defines an import configuration factory.
 */
interface ImportConfigFactoryInterface
{
    /**
     * Build import configuration VO out of form data.
     *
     * @param Request $request
     *
     * @return ImportConfigInterface
     */
    public function buildFromRequest(\Symfony\Component\HttpFoundation\Request $request);
}
