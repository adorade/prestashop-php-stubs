<?php

namespace PrestaShop\PrestaShop\Adapter\Routes;

/**
 * Class DefaultRouteProvider is responsible for retrieving data from dispatcher entity.
 */
class DefaultRouteProvider
{
    /**
     * Gets keywords used in generating different routes.
     *
     * @return array - the key is the route id  - product_rule, category_rule etc... and the values are keyword array
     *               used to generate the route. If param field exists in keywords array then it is mandatory field to use.
     *
     * @throws PrestaShopException
     */
    public function getKeywords()
    {
    }
    /**
     * Gets rules which are used for routes generation.
     *
     * @return array - he key is the route id  - product_rule, category_rule etc... and the value is rule itself.
     *
     * @throws PrestaShopException
     */
    public function getRules()
    {
    }
}
