<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Store;

class StorePresenter
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Image\ImageRetriever
     */
    protected $imageRetriever;
    /**
     * @var \Link
     */
    protected $link;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $translator;
    public function __construct(\Link $link, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param array|\Store $store Store object or an array
     * @param \Language $language
     *
     * @return StoreLazyArray
     */
    public function present($store, $language)
    {
    }
}
