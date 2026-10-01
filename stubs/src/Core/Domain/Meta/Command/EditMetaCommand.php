<?php

namespace PrestaShop\PrestaShop\Core\Domain\Meta\Command;

/**
 * Class EditMetaCommand
 */
class EditMetaCommand extends \PrestaShop\PrestaShop\Core\Domain\Meta\Command\AbstractMetaCommand
{
    /**
     * @param int $metaId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaException
     */
    public function __construct($metaId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Meta\ValueObject\MetaId
     */
    public function getMetaId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Meta\ValueObject\Name
     */
    public function getPageName()
    {
    }
    /**
     * @param string $pageName
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaConstraintException
     */
    public function setPageName($pageName)
    {
    }
    /**
     * @param string[] $localisedPageTitles
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaConstraintException
     */
    public function setLocalisedPageTitles(array $localisedPageTitles)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedPageTitles()
    {
    }
    /**
     * @param string[] $localisedMetaDescriptions
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaConstraintException
     */
    public function setLocalisedMetaDescriptions(array $localisedMetaDescriptions)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedMetaDescriptions()
    {
    }
    /**
     * @param string[] $localisedMetaKeywords
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaConstraintException
     */
    public function setLocalisedMetaKeywords(array $localisedMetaKeywords)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedMetaKeywords()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedRewriteUrls()
    {
    }
    /**
     * @param string[] $localisedRewriteUrls
     *
     * @return self
     */
    public function setLocalisedRewriteUrls(array $localisedRewriteUrls)
    {
    }
}
