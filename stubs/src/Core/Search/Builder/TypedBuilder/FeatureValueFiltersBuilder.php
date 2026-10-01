<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder\TypedBuilder;

class FeatureValueFiltersBuilder extends \PrestaShop\PrestaShop\Core\Search\Builder\AbstractFiltersBuilder implements \PrestaShop\PrestaShop\Core\Search\Builder\TypedBuilder\TypedFiltersBuilderInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Language\ContextLanguageProviderInterface $contextLanguageProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setConfig(array $config): \PrestaShop\PrestaShop\Core\Search\Builder\TypedBuilder\FeatureValueFiltersBuilder
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildFilters(?\PrestaShop\PrestaShop\Core\Search\Filters $filters = null)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function supports(string $filterClassName): bool
    {
    }
}
