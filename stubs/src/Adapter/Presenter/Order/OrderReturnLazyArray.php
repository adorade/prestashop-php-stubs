<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Order;

class OrderReturnLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * OrderReturnLazyArray constructor.
     *
     * @param string $prefix
     * @param Link $link
     * @param array $orderReturn
     *
     * @throws \ReflectionException
     */
    public function __construct($prefix, \Link $link, array $orderReturn)
    {
    }
    /**
     * @arrayAccess
     *
     * @return mixed
     */
    public function getId()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getDetailsUrl()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getReturnUrl()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getReturnNumber()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     *
     * @throws PrestaShopException
     */
    public function getReturnDate()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getPrintUrl()
    {
    }
}
