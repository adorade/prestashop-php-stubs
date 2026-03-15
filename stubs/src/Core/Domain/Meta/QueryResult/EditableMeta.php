<?php

namespace PrestaShop\PrestaShop\Core\Domain\Meta\QueryResult;

/**
 * Class EditableMeta is responsible for providing data for meta form.
 */
class EditableMeta
{
    /**
     * EditableMeta constructor.
     *
     * @param int $metaId
     * @param string $pageName
     * @param string[] $localisedPageTitles
     * @param string[] $localisedMetaDescriptions
     * @param string[] $localisedMetaKeywords
     * @param string[] $localisedUrlRewrites
     *
     * @throws Exception\MetaConstraintException
     * @throws MetaException
     */
    public function __construct($metaId, $pageName, array $localisedPageTitles, array $localisedMetaDescriptions, array $localisedMetaKeywords, array $localisedUrlRewrites)
    {
    }
    /**
     * @return MetaId
     */
    public function getMetaId()
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
     * @return string[]
     */
    public function getLocalisedMetaDescriptions()
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
    public function getLocalisedUrlRewrites()
    {
    }
}
