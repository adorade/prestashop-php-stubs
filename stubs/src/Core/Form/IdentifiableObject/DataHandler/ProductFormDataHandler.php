<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Handles data posted from product form
 */
class ProductFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $bus
     * @param ProductCommandsBuilderInterface $commandsBuilder
     * @param int $defaultShopId
     * @param int|null $contextShopId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus, \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\ProductCommandsBuilderInterface $commandsBuilder, int $defaultShopId, ?int $contextShopId)
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
     */
    public function update($id, array $data)
    {
    }
}
