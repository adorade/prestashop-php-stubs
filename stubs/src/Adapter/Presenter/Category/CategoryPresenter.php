<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Category;

class CategoryPresenter
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Image\ImageRetriever
     */
    protected $imageRetriever;
    /**
     * @var \Link
     */
    protected $link;
    public function __construct(\Link $link)
    {
    }
    /**
     * @param array|\Category $category Category object or an array
     * @param \Language $language
     *
     * @return CategoryLazyArray
     */
    public function present(array|\Category $category, \Language $language): \PrestaShop\PrestaShop\Adapter\Presenter\Category\CategoryLazyArray
    {
    }
}
