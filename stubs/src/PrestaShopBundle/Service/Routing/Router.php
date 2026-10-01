<?php

namespace PrestaShopBundle\Service\Routing;

/**
 * We extends Symfony Router in order to add a token to each url.
 *
 * This is done for Security purposes.
 */
class Router extends \Symfony\Bundle\FrameworkBundle\Routing\Router
{
    /**
     * {@inheritdoc}
     */
    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH): string
    {
    }
    public function setUserTokenManager(\PrestaShopBundle\Security\Admin\UserTokenManager $userTokenManager): void
    {
    }
    public function setAnonymousRouteProvider(\PrestaShopBundle\Routing\AnonymousRouteProvider $anonymousRouteProvider): void
    {
    }
    public static function generateTokenizedUrl($url, $token)
    {
    }
}
