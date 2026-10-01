<?php

namespace PrestaShopBundle\Entity\Repository;

class ApiClientRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param int $apiClientId
     *
     * @return \PrestaShopBundle\Entity\ApiClient
     *
     * @throws \Doctrine\ORM\NoResultException
     */
    public function getById(int $apiClientId): \PrestaShopBundle\Entity\ApiClient
    {
    }
    /**
     * @param string $clientId
     * @param string|null $externalIssuer
     *
     * @return \PrestaShopBundle\Entity\ApiClient
     *
     * @throws \Doctrine\ORM\NoResultException
     */
    public function getByClientId(string $clientId, ?string $externalIssuer = null): \PrestaShopBundle\Entity\ApiClient
    {
    }
    public function delete(\PrestaShopBundle\Entity\ApiClient $apiClient): void
    {
    }
    public function save(\PrestaShopBundle\Entity\ApiClient $apiClient): int
    {
    }
}
