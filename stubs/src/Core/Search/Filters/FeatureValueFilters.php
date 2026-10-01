<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

class FeatureValueFilters extends \PrestaShop\PrestaShop\Core\Search\Filters
{
    /** @var string */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\FeatureValueGridDefinitionFactory::GRID_ID;
    /**
     * @var int
     */
    protected $featureId;
    /**
     * @var int
     */
    protected $languageId;
    public function __construct(array $filters = [])
    {
    }
    public function getFeatureId(): int
    {
    }
    public function getLanguageId(): int
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function getDefaults(): array
    {
    }
}
