<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Handles submitted catalog price rule form data
 */
final class CatalogPriceRuleFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $commandBus
     * @param bool $isMultishopEnabled
     * @param int $contextShopId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, bool $isMultishopEnabled, int $contextShopId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(array $data): int
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CatalogPriceRuleException
     */
    public function update($catalogPriceRuleId, array $data)
    {
    }
}
