<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Supplier;

class SupplierLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * @var array
     */
    protected $supplier;
    public function __construct(array $supplier, \Language $language, \PrestaShop\PrestaShop\Adapter\Image\ImageRetriever $imageRetriever, \Link $link)
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
     * @return int
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getNbProducts()
    {
    }
}
