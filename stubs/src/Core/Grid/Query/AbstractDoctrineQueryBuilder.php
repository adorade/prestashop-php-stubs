<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Class AbstractDoctrineQueryBuilder provides most common dependencies of doctrine query builders.
 */
abstract class AbstractDoctrineQueryBuilder implements \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryBuilderInterface
{
    /**
     * @var Connection
     */
    protected $connection;
    /**
     * @var string
     */
    protected $dbPrefix;
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix)
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
