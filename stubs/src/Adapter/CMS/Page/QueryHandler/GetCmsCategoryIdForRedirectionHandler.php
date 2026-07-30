<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\Page\QueryHandler;

/**
 * This class is used for getting the id which is used later on to redirect to the right page after certain controller
 * actions.
 */
final class GetCmsCategoryIdForRedirectionHandler extends \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\AbstractCmsPageHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPage\QueryHandler\GetCmsCategoryIdHandlerForRedirectionInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Query\GetCmsCategoryIdForRedirection $query)
    {
    }
}
