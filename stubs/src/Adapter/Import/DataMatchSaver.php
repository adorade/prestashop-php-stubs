<?php

namespace PrestaShop\PrestaShop\Adapter\Import;

/**
 * Class DataMatchSaver saves data configuration match.
 * This class will be removed with CQRS introduction.
 */
final class DataMatchSaver
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix)
    {
    }
    /**
     * Save data match.
     *
     * @param string $name name of the match
     * @param array $value value of the match
     * @param int $skipRows number of rows to skip from the import file
     *
     * @return bool
     */
    public function save($name, array $value, $skipRows)
    {
    }
}
