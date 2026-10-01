<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Class CmsPageCategoryFormDataHandler is responsible for creating and updating cms page category form data.
 */
final class CmsPageCategoryFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function update($id, array $data)
    {
    }
}
