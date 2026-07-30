<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler;

/**
 * Holds the abstraction required for Adding or updating the cms page category.
 */
abstract class AbstractCmsPageCategoryHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    /**
     * @param ValidatorInterface $validator
     */
    public function __construct(\Symfony\Component\Validator\Validator\ValidatorInterface $validator)
    {
    }
    /**
     * @param array $localisedTexts
     *
     * @return bool
     */
    protected function assertHasDefaultLanguage(array $localisedTexts)
    {
    }
    /**
     * @param array $localisedUrls
     *
     * @throws CmsPageCategoryConstraintException
     */
    protected function assertIsValidLinkRewrite(array $localisedUrls)
    {
    }
    /**
     * @param array $localisedDescription
     *
     * @throws CmsPageCategoryConstraintException
     */
    protected function assertDescriptionContainsCleanHtml(array $localisedDescription)
    {
    }
}
