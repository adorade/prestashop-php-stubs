<?php

namespace PrestaShopBundle\Service\Database;

class TransactionManager implements \PrestaShop\PrestaShop\Core\Repository\TransactionManagerInterface
{
    /**
     * @param \Doctrine\ORM\EntityManager $entityManager
     */
    public function __construct(\Doctrine\ORM\EntityManager $entityManager)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function rollback(): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function commit(): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function beginTransaction(): void
    {
    }
}
