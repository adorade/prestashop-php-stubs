<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory\Security\Session;

/**
 * Class EmployeeGridDefinitionFactory responsible for creating Employee grid definition.
 */
final class EmployeeGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, string $contextDateFormat)
    {
    }
    /**
     * @var string
     */
    public const GRID_ID = 'security_session_employee';
}
