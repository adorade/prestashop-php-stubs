<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Order;

class OrderReturnLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * OrderReturnLazyArray constructor.
     *
     * @param string $prefix
     * @param \Link $link
     * @param array $orderReturn
     *
     * @throws \ReflectionException
     */
    public function __construct($prefix, \Link $link, array $orderReturn)
    {
    }
    /**
     * @return mixed
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getId()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getDetailsUrl()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getReturnUrl()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getReturnNumber()
    {
    }
    /**
     * @return string
     *
     * @throws \PrestaShopException
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getReturnDate()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getPrintUrl()
    {
    }
}
