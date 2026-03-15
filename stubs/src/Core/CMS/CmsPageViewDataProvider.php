<?php

namespace PrestaShop\PrestaShop\Core\CMS;

/**
 * Class CmsPageViewDataProvider provides cms page view data for cms listing page.
 */
final class CmsPageViewDataProvider implements \PrestaShop\PrestaShop\Core\CMS\CmsPageViewDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CmsPageCategoryException
     */
    public function getView($cmsCategoryParentId)
    {
    }
}
