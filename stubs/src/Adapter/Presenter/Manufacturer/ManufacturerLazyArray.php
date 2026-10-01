<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Manufacturer;

class ManufacturerLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * @var array
     */
    protected $manufacturer;
    public function __construct(array $manufacturer, \Language $language, \PrestaShop\PrestaShop\Adapter\Image\ImageRetriever $imageRetriever, \Link $link)
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getText()
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
