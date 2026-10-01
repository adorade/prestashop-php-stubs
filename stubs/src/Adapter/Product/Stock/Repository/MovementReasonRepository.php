<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\Repository;

class MovementReasonRepository
{
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * Provides stock movement reason id from configuration
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\MovementReasonConfigurationNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\MovementReasonConstraintException
     */
    public function getReasonIdFromConfiguration(string $configurationKey): \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\MovementReasonId
    {
    }
    /**
     * @param bool $increased true if quantity increased, false if decreased
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\MovementReasonConfigurationNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\MovementReasonConstraintException
     */
    public function getEmployeeEditionReasonId(bool $increased): \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\MovementReasonId
    {
    }
}
