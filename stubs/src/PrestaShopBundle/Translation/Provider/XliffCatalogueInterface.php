<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Provide an Message Catalogue from Xliff files.
 */
interface XliffCatalogueInterface
{
    /**
     * @return \Symfony\Component\Translation\MessageCatalogue
     */
    public function getXliffCatalogue();
}
