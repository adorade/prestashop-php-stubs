<?php

namespace PrestaShop\PrestaShop\Core\Domain\Meta\Command;

/**
 * Class AddMetaCommand is responsible for saving meta entities data.
 */
class AddMetaCommand extends \PrestaShop\PrestaShop\Core\Domain\Meta\Command\AbstractMetaCommand
{
    /**
     * @param string $pageName
     *
     * @throws MetaConstraintException
     */
    public function __construct($pageName)
    {
    }
    /**
     * @return Name
     */
    public function getPageName()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedPageTitles()
    {
    }
    /**
     * @param string[] $localisedPageTitle
     *
     * @return self
     *
     * @throws MetaConstraintException
     */
    public function setLocalisedPageTitle(array $localisedPageTitle)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedMetaDescription()
    {
    }
    /**
     * @param string[] $localisedMetaDescription
     *
     * @return self
     *
     * @throws MetaConstraintException
     */
    public function setLocalisedMetaDescription(array $localisedMetaDescription)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedMetaKeywords()
    {
    }
    /**
     * @param string[] $localisedMetaKeywords
     *
     * @return self
     *
     * @throws MetaConstraintException
     */
    public function setLocalisedMetaKeywords(array $localisedMetaKeywords)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedRewriteUrls()
    {
    }
    /**
     * @param string[] $LocalisedRewriteUrls
     *
     * @return self
     */
    public function setLocalisedRewriteUrls(array $LocalisedRewriteUrls)
    {
    }
}
