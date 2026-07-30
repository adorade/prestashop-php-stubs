<?php

namespace PrestaShopBundle\Translation\Provider;

interface SearchProviderInterface extends \PrestaShopBundle\Translation\Provider\ProviderInterface, \PrestaShopBundle\Translation\Provider\UseDefaultCatalogueInterface, \PrestaShopBundle\Translation\Provider\XliffCatalogueInterface, \PrestaShopBundle\Translation\Provider\DatabaseCatalogueInterface
{
    /**
     * @param string $domain
     *
     * @return self
     */
    public function setDomain($domain);
    /**
     * @param string $locale
     *
     * @return self
     */
    public function setLocale($locale);
}
