<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Category;

class CategoryLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * @var array
     */
    protected $category;
    public function __construct(array $category, \Language $language, \PrestaShop\PrestaShop\Adapter\Image\ImageRetriever $imageRetriever, \Link $link)
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getUrl()
    {
    }
    /**
     * @return array|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getImage()
    {
    }
    /**
     * This returns category cover image (miniatures of CATEGORYID.jpg).
     * Used as a big image under category description.
     *
     * @return array|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getCover()
    {
    }
    /**
     * This returns category thumbnail image (miniatures of CATEGORYID_thumb.jpg).
     * Used for thumbnails in subcategories.
     *
     * @return array|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getThumbnail()
    {
    }
}
