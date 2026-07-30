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
    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
    }
    public function setTokenManager(\Symfony\Component\Security\Csrf\CsrfTokenManager $tokenManager)
    {
    }
    public function setUserProvider(\PrestaShopBundle\Service\DataProvider\UserProvider $userProvider)
    {
    }
    public static function generateTokenizedUrl($url, $token)
    {
    }
}
