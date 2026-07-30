<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager;

/**
 * Class SqlQueryValidator is responsible for validating Request SQL model data.
 */
class SqlQueryValidator
{
    /**
     * Check if SQL is valid for Reqest SQL model.
     * Only "Select" sqls should be valid.
     *
     * @param string $sql
     *
     * @return array Array of errors if any
     */
    public function validate($sql)
    {
    }
}
