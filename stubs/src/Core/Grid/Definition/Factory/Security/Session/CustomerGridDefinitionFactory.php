<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory\Security\Session;

/**
 * Class CustomerGridDefinitionFactory responsible for creating Customer sessions grid definition.
 */
final class CustomerGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, string $contextDateFormat)
    {
    }
    /**
     * @var string
     */
    public const GRID_ID = 'security_session_customer';
}
