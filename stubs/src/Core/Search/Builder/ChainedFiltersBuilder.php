<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder;

/**
 * This builder is used to compose other builders, it iterates through its builders
 * set the config for all of them (each one can pick its own parameters), and when
 * building iterates through them overriding the same Filters instance step by step.
 *
 * This allows to split every Filters building into separate classes and then compose
 * them based on your needs.
 */
final class ChainedFiltersBuilder extends \PrestaShop\PrestaShop\Core\Search\Builder\AbstractFiltersBuilder
{
    /**
     * @param array $builders Array of FiltersBuilderInterface
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function __construct(array $builders = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setConfig(array $config)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildFilters(\PrestaShop\PrestaShop\Core\Search\Filters $filters = null)
    {
    }
}
