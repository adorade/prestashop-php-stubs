<?php

namespace PrestaShopBundle\Routing\Converter;

/**
 * This class converts the request information (attributes and query parameters)
 * and returns an array of parameters adapted with their legacy names (based on
 * the configuration from the routing).
 */
class LegacyParametersConverter
{
    /**
     * Use the request attributes which contain the routing configuration along with query
     * parameters to return an array containing the equivalent with legacy parameters names.
     *
     * Example with $request being a Symfony Request:
     *
     * $legacyParameters = $converter->getParameters($request->attributes->all(), $request->query->all());
     *
     * @param array $requestAttributes
     * @param array $queryParameters
     *
     * @return array|null
     */
    public function getParameters(array $requestAttributes, array $queryParameters): ?array
    {
    }
}
