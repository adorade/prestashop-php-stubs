<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

class BulkCombinationFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $commandBus
     * @param BulkCombinationFormDataFormatter $bulkCombinationFormDataFormatter
     * @param CombinationCommandsBuilderInterface $commandsBuilder
     * @param int $contextShopId
     * @param int $defaultShopId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataFormatter\BulkCombinationFormDataFormatter $bulkCombinationFormDataFormatter, \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationCommandsBuilderInterface $commandsBuilder, int $contextShopId, int $defaultShopId)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function update($id, array $data): void
    {
    }
}
