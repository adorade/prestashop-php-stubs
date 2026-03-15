<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class EmailLogsDefinitionFactory is responsible for creating email logs definition.
 */
final class EmailLogsDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'email_logs';
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param ConfigurableFormChoiceProviderInterface $languageChoiceProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $languageChoiceProvider)
    {
    }
}
