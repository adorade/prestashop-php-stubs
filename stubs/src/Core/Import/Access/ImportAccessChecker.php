<?php

namespace PrestaShop\PrestaShop\Core\Import\Access;

/**
 * Class ImportAccessChecker is responsible for checking import access.
 */
final class ImportAccessChecker implements \PrestaShop\PrestaShop\Core\Import\Access\ImportAccessCheckerInterface
{
    /**
     * @param ContextEmployeeProviderInterface $contextEmployeeProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface $contextEmployeeProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function canTruncateData()
    {
    }
}
