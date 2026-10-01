<?php

namespace PrestaShop\PrestaShop\Adapter\State\Repository;

/**
 * Provides access to state data source
 */
class StateRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId $stateId
     *
     * @return \State
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId $stateId): \State
    {
    }
}
