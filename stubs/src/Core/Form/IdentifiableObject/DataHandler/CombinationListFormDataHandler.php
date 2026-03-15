<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * This handler is used for ajax request performed from the combination list, it handles a list of combinations
 * whihc are (potentially) only a subset of all the product's combinations (since the list is paginated).
 */
class CombinationListFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $commandBus
     * @param CombinationListFormDataFormatter $combinationListFormDataFormatter
     * @param CombinationCommandsBuilderInterface $commandsBuilder
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataFormatter\CombinationListFormDataFormatter $combinationListFormDataFormatter, \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationCommandsBuilderInterface $commandsBuilder, int $contextShopId, int $defaultShopId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function update($productId, array $data)
    {
    }
}
