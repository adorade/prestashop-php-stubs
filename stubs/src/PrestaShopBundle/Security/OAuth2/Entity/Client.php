<?php

namespace PrestaShopBundle\Security\OAuth2\Entity;

/**
 * This class is the Client entity managed by ClientRepository
 *
 * @experimental
 */
class Client implements \League\OAuth2\Server\Entities\ClientEntityInterface
{
    use \League\OAuth2\Server\Entities\Traits\ClientTrait;
    use \League\OAuth2\Server\Entities\Traits\EntityTrait;
    public function __construct()
    {
    }
}
