<?php

namespace PrestaShopBundle\Entity\Repository;

/**
 * Class OrderInvoiceRepository.
 */
class OrderInvoiceRepository
{
    /**
     * @param Connection $connection
     * @param string $tablePrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $tablePrefix)
    {
    }
    /**
     * Count number of orders grouped by order state.
     *
     * @param array $shopIds
     *
     * @return array
     */
    public function countByOrderState(array $shopIds)
    {
    }
}
