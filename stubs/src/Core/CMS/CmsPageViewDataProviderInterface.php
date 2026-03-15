<?php

namespace PrestaShop\PrestaShop\Core\CMS;

/**
 * Interface CmsPageViewDataProviderInterface defines contract for CmsPageViewDataProvider.
 */
interface CmsPageViewDataProviderInterface
{
    /**
     * Gets data required for rendering the view.
     *
     * @param int $cmsCategoryParentId
     *
     * @return array
     */
    public function getView($cmsCategoryParentId);
}
