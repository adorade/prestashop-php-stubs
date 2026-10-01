<?php

namespace PrestaShop\PrestaShop\Core\CMS;

/**
 * Class CmsPageViewDataProvider provides cms page view data for cms listing page.
 */
final class CmsPageViewDataProvider implements \PrestaShop\PrestaShop\Core\CMS\CmsPageViewDataProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function getView($cmsCategoryParentId)
    {
    }
}
