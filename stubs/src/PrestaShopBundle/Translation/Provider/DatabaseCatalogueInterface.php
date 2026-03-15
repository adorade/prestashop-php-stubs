<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Provide an Message Catalogue from the Database
 */
interface DatabaseCatalogueInterface
{
    /**
     * @param string|null $themeName the Theme name
     *
     * @return MessageCatalogue
     */
    public function getDatabaseCatalogue($themeName = null);
}
