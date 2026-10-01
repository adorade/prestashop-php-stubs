<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * {@inheritdoc}
 */
final class CmsPageFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus
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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception\CmsPageException
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function update($cmsPageId, array $data)
    {
    }
}
