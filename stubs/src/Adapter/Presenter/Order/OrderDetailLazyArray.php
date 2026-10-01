<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Order;

class OrderDetailLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * OrderDetailLazyArray constructor.
     *
     * @param \Order $order
     */
    public function __construct(\Order $order, \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository)
    {
    }
    /**
     * @return int
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getId()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getReference()
    {
    }
    /**
     * @return string
     *
     * @throws \PrestaShopException
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getOrderDate()
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
     * @return mixed
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getReorderUrl()
    {
    }
    /**
     * @return mixed
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getInvoiceUrl()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getGiftMessage()
    {
    }
    /**
     * @return int
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getIsReturnable()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getPayment()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getModule()
    {
    }
    /**
     * @return bool
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getRecyclable()
    {
    }
    /**
     * @return bool
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getIsValid()
    {
    }
    /**
     * @return bool
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getIsVirtual()
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function hasShipments(): bool
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getShipping()
    {
    }
}
