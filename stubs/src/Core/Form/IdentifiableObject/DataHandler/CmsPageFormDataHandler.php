<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * {@inheritdoc}
 */
final class CmsPageFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $commandBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    /**
     * Create object from form data.
     *
     * @param array $data
     *
     * @return int
     *
     * @throws CmsPageCategoryException
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CmsPageException
     * @throws CmsPageCategoryException
     */
    public function update($cmsPageId, array $data)
    {
    }
}
