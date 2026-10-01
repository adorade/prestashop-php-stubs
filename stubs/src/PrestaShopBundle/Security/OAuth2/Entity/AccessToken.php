<?php

namespace PrestaShopBundle\Security\OAuth2\Entity;

/**
 * This class is the AccessToken entity managed by AccessTokenRepository
 *
 * @experimental
 */
class AccessToken implements \League\OAuth2\Server\Entities\AccessTokenEntityInterface
{
    /*
     * Default League\OAuth AccessToken implementation
     */
    use \League\OAuth2\Server\Entities\Traits\AccessTokenTrait;
    use \League\OAuth2\Server\Entities\Traits\TokenEntityTrait;
    use \League\OAuth2\Server\Entities\Traits\EntityTrait;
}
