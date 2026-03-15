<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Order;

class OrderLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * OrderArray constructor.
     *
     * @throws AnnotationException
     * @throws ReflectionException
     */
    public function __construct(\Order $order)
    {
    }
    /**
     * @arrayAccess
     *
     * @return mixed
     */
    public function getTotals()
    {
    }
    /**
     * @arrayAccess
     *
     * @return int
     */
    public function getIdAddressInvoice()
    {
    }
    /**
     * @arrayAccess
     *
     * @return int
     */
    public function getIdAddressDelivery()
    {
    }
    /**
     * @arrayAccess
     *
     * @return mixed
     */
    public function getSubtotals()
    {
    }
    /**
     * @arrayAccess
     *
     * @return int
     */
    public function getProductsCount()
    {
    }
    /**
     * @arrayAccess
     *
     * @return mixed
     *
     * @throws PrestaShopException
     */
    public function getShipping()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getProducts()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getAmounts()
    {
    }
    /**
     * @arrayAccess
     *
     * @return OrderDetailLazyArray
     */
    public function getDetails()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getHistory()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getMessages()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getCarrier()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getAddresses()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getFollowUp()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getLabels()
    {
    }
}
