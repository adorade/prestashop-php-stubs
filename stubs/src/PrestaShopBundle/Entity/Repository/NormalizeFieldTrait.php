<?php

namespace PrestaShopBundle\Entity\Repository;

trait NormalizeFieldTrait
{
    /**
     * @param array $rows
     *
     * @return mixed
     */
    protected function castNumericToInt($rows)
    {
    }
    /**
     * @param array $rows
     *
     * @return mixed
     */
    protected function castIdsToArray($rows)
    {
    }
    /**
     * @param string $columnName
     * @param string|null $columnValue
     *
     * @return bool
     */
    private function shouldCastToInt($columnName, $columnValue)
    {
    }
}
