<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Manufacturer;

class ManufacturerPresenter
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
     * @param array|\Manufacturer $manufacturer Manufacturer object or an array
     * @param \Language $language
     *
     * @return ManufacturerLazyArray
     */
    public function present(array|\Manufacturer $manufacturer, \Language $language)
    {
    }
}
