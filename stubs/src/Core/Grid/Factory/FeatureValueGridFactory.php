<?php

namespace PrestaShop\PrestaShop\Core\Grid\Factory;

/**
 * This class allows adapting the feature value grid definition with dynamic values
 * which depends on values inside search filters (the name and actions that needs featureId and/or languageId)
 */
class FeatureValueGridFactory extends \PrestaShop\PrestaShop\Core\Grid\GridFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory
     * @param \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $dataFactory
     * @param \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     * @param \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository
     *
     * @todo: after following ADR https://github.com/PrestaShop/ADR/pull/33,
     *        the Addapter/FeatureRepository usage should be replaced by interface
     *        and FeatureValueGridFactory should be removed from phpstan-disallowed-calls.neon "allowIn" section
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory, \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $dataFactory, \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, protected readonly \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository, protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function getGrid(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\GridInterface
    {
    }
    /**
     * Some modifications are needed in order to fill some required dynamic values coming from request (which are in filters like the $featureId)
     *
     * @param \PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinition $definition
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $featureValueFilters
     *
     * @return void
     */
    protected function modifyDefinition(\PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinition $definition, \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $featureValueFilters): void
    {
    }
    /**
     * Add filter rows which requires dynamic values from request such as $featureId.
     *
     * @param \PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinition $definition
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $featureValueFilters
     *
     * @return void
     */
    protected function addFilters(\PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinition $definition, \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $featureValueFilters): void
    {
    }
    /**
     * Most of these actions could have been added statically in definition factory, but the export action requires
     * $featureId which comes from filters, therefore to maintain actions order and avoid complication we fill all of those actions here.
     *
     * @param \PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinition $definition
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $featureValueFilters
     *
     * @return void
     */
    protected function addGridActions(\PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinition $definition, \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $featureValueFilters): void
    {
    }
    /**
     * Adds bulk actions which requires featureId value from filters
     *
     * @param \PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinition $definition
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $featureValueFilters
     *
     * @return void
     */
    protected function addBulkActions(\PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinition $definition, \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $featureValueFilters): void
    {
    }
    protected function trans($id, array $options, $domain): string
    {
    }
}
