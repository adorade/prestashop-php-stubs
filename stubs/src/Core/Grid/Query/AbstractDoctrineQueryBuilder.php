<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Class AbstractDoctrineQueryBuilder provides most common dependencies of doctrine query builders.
 */
abstract class AbstractDoctrineQueryBuilder implements \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryBuilderInterface
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $dbPrefix)
    {
    }
    /**
     * Escape percent in query for LIKE query
     *      '20%' => '20\%'
     *
     * @param string $value
     *
     * @return string
     */
    protected function escapePercent(string $value): string
    {
    }
}
