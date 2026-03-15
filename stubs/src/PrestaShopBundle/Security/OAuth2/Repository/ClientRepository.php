<?php

namespace PrestaShopBundle\Security\OAuth2\Repository;

/**
 * Repository class responsible for managing PrestaShop's Authorization Server Client entity
 *
 * @experimental
 */
class ClientRepository implements \League\OAuth2\Server\Repositories\ClientRepositoryInterface
{
    public function __construct(\Symfony\Component\Security\Core\User\UserProviderInterface $userProvider, \Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface $passwordEncoder)
    {
    }
    public function getClientEntity($clientIdentifier): ?\PrestaShopBundle\Security\OAuth2\Entity\Client
    {
    }
    public function validateClient($clientIdentifier, $clientSecret, $grantType): bool
    {
    }
}
