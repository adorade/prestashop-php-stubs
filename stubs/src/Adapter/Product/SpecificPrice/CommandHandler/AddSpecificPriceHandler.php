<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\CommandHandler;

/**
 * Handles AddProductSpecificPriceCommand using legacy object model
 */
class AddSpecificPriceHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\CommandHandler\AddSpecificPriceHandlerInterface
{
    /**
     * @param SpecificPriceRepository $specificPriceRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\AddSpecificPriceCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId
    {
    }
}
