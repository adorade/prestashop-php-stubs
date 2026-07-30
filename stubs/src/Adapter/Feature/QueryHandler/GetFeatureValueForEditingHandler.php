<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\QueryHandler;

class GetFeatureValueForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Feature\QueryHandler\GetFeatureValueForEditingHandlerInterface
{
    /**
     * @param FeatureValueRepository $featureValueRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Query\GetFeatureValueForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Feature\QueryResult\EditableFeatureValue
    {
    }
}
