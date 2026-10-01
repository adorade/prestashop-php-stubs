<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command;

/**
 * Class AbstractCmsPageCategoryCommand
 */
abstract class AbstractCmsPageCategoryCommand
{
    public const CATEGORY_NAME_REGEX_PATTERN = '/^[^<>{}]*$/u';
    public const GENERIC_NAME_REGEX_PATTERN = '/^[^<>{}]*$/u';
    /**
     * Checks if given names matches pattern.
     *
     * @param array $names
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryConstraintException
     */
    protected function assertCategoryName(array $names)
    {
    }
    /**
     * @param array $localisedMetaTitles
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryConstraintException
     */
    protected function assertIsGenericNameForMetaTitle(array $localisedMetaTitles)
    {
    }
    /**
     * @param array $localisedMetaDescription
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryConstraintException
     */
    protected function assertIsGenericNameForMetaDescription(array $localisedMetaDescription)
    {
    }
}
