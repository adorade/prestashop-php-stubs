<?php

namespace PrestaShop\PrestaShop\Core\Repository;

interface TransactionManagerInterface
{
    /**
     * Initiate a transaction
     */
    public function beginTransaction();
    /**
     * Commit a transaction
     */
    public function commit();
    /**
     * Rollback a transaction
     */
    public function rollback();
}
