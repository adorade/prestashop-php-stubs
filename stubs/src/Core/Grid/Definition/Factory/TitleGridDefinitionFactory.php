<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class TitleGridDefinitionFactory creates definition for title grid.
 */
class TitleGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'title';
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $genderChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getId()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getColumns()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getFilters()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getGridActions()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getBulkActions()
    {
    }
}
