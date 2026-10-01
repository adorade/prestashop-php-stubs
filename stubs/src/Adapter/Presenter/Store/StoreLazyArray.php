<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Store;

class StoreLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * @var array
     */
    protected $store;
    public function __construct(array $store, \Language $language, \PrestaShop\PrestaShop\Adapter\Image\ImageRetriever $imageRetriever, \Symfony\Contracts\Translation\TranslatorInterface $translator)
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
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getAddress()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getBusinessHours()
    {
    }
}
