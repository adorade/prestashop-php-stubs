<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Order;

class OrderDetailLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * OrderDetailLazyArray constructor.
     *
     * @param Order $order
     */
    public function __construct(\Order $order)
    {
    }
    /**
     * @arrayAccess
     *
     * @return int
     */
    public function getId()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getReference()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     *
     * @throws PrestaShopException
     */
    public function getOrderDate()
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
     * @return mixed
     */
    public function getReorderUrl()
    {
    }
    /**
     * @arrayAccess
     *
     * @return mixed
     */
    public function getInvoiceUrl()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getGiftMessage()
    {
    }
    /**
     * @arrayAccess
     *
     * @return int
     */
    public function getIsReturnable()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getPayment()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getModule()
    {
    }
    /**
     * @arrayAccess
     *
     * @return bool
     */
    public function getRecyclable()
    {
    }
    /**
     * @arrayAccess
     *
     * @return bool
     */
    public function getIsValid()
    {
    }
    /**
     * @arrayAccess
     *
     * @return bool
     */
    public function getIsVirtual()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getShipping()
    {
    }
}
