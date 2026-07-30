<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Defines grid for credit slip listing
 */
final class CreditSlipGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    public const GRID_ID = 'credit_slip';
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param string $dateFormat The format in which date column values should be shown
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, $dateFormat)
    {
    }
}
