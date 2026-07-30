<?php

namespace PrestaShop\PrestaShop\Core\Import\Configuration;

/**
 * Interface ImportRuntimeConfigFactoryInterface describes an import runtime config factory.
 */
interface ImportRuntimeConfigFactoryInterface
{
    /**
     * Build runtime config object out of request.
     *
     * @param Request $request
     *
     * @return ImportRuntimeConfigInterface
     */
    public function buildFromRequest(\Symfony\Component\HttpFoundation\Request $request);
}
