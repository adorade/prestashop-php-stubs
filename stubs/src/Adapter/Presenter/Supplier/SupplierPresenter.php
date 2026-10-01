<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Supplier;

class SupplierPresenter
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
     * @param array|\Supplier $supplier Supplier object or an array
     * @param \Language $language
     *
     * @return SupplierLazyArray
     */
    public function present(array|\Supplier $supplier, \Language $language)
    {
    }
}
