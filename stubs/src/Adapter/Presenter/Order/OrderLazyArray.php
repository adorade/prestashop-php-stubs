<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Order;

class OrderLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * OrderArray constructor.
     *
     * @throws \Doctrine\Common\Annotations\AnnotationException
     * @throws \ReflectionException
     */
    public function __construct(\Order $order)
    {
    }
    /**
     * @return mixed
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getTotals()
    {
    }
    /**
     * @return int
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getIdAddressInvoice()
    {
    }
    /**
     * @return int
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getIdAddressDelivery()
    {
    }
    /**
     * @return mixed
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getSubtotals()
    {
    }
    /**
     * @return int
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getProductsCount()
    {
    }
    /**
     * @return mixed
     *
     * @throws \PrestaShopException
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getShipping()
    {
    }
    /**
     * @return mixed
     *
     * @throws \PrestaShopException
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function hasShipments()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getProducts()
    {
    }
    /**
     * @return array{
     *     virtual_products: array<int, array<string, mixed>>,
     *     physical_products: array<int, array{
     *         carrier: array{
     *             name: string,
     *             delay: string|array<string>
     *         },
     *         products: array<int, array<string, mixed>>
     *     }>
     * }
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getOrderShipments(): array
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getAmounts()
    {
    }
    /**
     * @return OrderDetailLazyArray
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getDetails()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getHistory()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getMessages()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getCarrier()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getAddresses()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getFollowUp()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getLabels()
    {
    }
}
