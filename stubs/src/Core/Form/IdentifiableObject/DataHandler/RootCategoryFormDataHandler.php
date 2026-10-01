<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Creates/updates root category from data submitted in category form
 *
 * @internal
 */
final class RootCategoryFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
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
    public function update($categoryId, array $data)
    {
    }
    /**
     * Creates command with form data for adding new root category
     *
     * @param array $data
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\Command\AddRootCategoryCommand
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     */
    public function createAddRootCategoryCommand(array $data): \PrestaShop\PrestaShop\Core\Domain\Category\Command\AddRootCategoryCommand
    {
    }
}
