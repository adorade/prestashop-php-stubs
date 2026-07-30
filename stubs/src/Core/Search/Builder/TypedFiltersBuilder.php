<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder;

/**
 * Class TypedFiltersBuilder is an orchestrator which decided which builder is going to built the strongly
 * typed Filter based on the defined filter class. It loops through a list of typed builders checking if
 * they support the request class and uses the first it finds when a compatibility is found.
 *
 * If no specific type builder is found then the default builder is used.
 */
class TypedFiltersBuilder extends \PrestaShop\PrestaShop\Core\Search\Builder\AbstractFiltersBuilder
{
    /**
     * @param FiltersBuilderInterface $defaultBuilder
     * @param iterable|TypedFiltersBuilderInterface[]|null $typedBuilders
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Search\Builder\FiltersBuilderInterface $defaultBuilder, ?iterable $typedBuilders = null)
    {
    }
    /**
     * @param TypedFiltersBuilderInterface $typedFiltersBuilder
     *
     * @return self
     */
    public function addTypedBuilder(\PrestaShop\PrestaShop\Core\Search\Builder\TypedBuilder\TypedFiltersBuilderInterface $typedFiltersBuilder): self
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setConfig(array $config)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildFilters(\PrestaShop\PrestaShop\Core\Search\Filters $filters = null)
    {
    }
}
