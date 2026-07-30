<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Provide an Message Catalogue from Xliff files.
 */
interface XliffCatalogueInterface
{
    /**
     * @return MessageCatalogue
     */
    public function getXliffCatalogue();
}
