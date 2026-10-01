<?php

namespace PrestaShopBundle\Routing\Converter;

/**
 * Class LegacyUrlConverter is able to convert query parameters or an url into a
 * migrated Symfony url. It uses information set in the routes via _legacy_link
 * to do so.
 */
final class LegacyUrlConverter
{
    /**
     * LegacyUrlConverter constructor.
     *
     * @param \Symfony\Component\Routing\RouterInterface $router
     * @param LegacyRouteProviderInterface $legacyRouteProvider
     */
    public function __construct(\Symfony\Component\Routing\RouterInterface $router, \PrestaShopBundle\Routing\Converter\LegacyRouteProviderInterface $legacyRouteProvider)
    {
    }
    /**
     * @param array $parameters
     *
     * @return string
     *
     * @throws \PrestaShopBundle\Routing\Converter\Exception\ArgumentException
     * @throws \PrestaShopBundle\Routing\Converter\Exception\RouteNotFoundException
     */
    public function convertByParameters(array $parameters)
    {
    }
    /**
     * @param string $url
     *
     * @return string
     *
     * @throws \PrestaShopBundle\Routing\Converter\Exception\ArgumentException
     * @throws \PrestaShopBundle\Routing\Converter\Exception\RouteNotFoundException
     * @throws \PrestaShopBundle\Routing\Converter\Exception\AlreadyConvertedException
     */
    public function convertByUrl($url)
    {
    }
    /**
     * This conversion method is used by the listener, indeed it needs to update the
     * router context because it is executed before the RouterListener. Thus the router
     * does not have the appropriate information to generate an admin url and would redirect
     * to the front office.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return string
     *
     * @throws \PrestaShopBundle\Routing\Converter\Exception\ArgumentException
     * @throws \PrestaShopBundle\Routing\Converter\Exception\RouteNotFoundException
     * @throws \PrestaShopBundle\Routing\Converter\Exception\AlreadyConvertedException
     */
    public function convertByRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
