<?php

class CheckoutSessionCore
{
    /** @var Context */
    protected $context;
    /** @var \PrestaShop\PrestaShop\Adapter\Shipment\DeliveryOptionsInterface */
    protected $deliveryOptions;
    /**
     * @param Context $context
     * @param \PrestaShop\PrestaShop\Adapter\Shipment\DeliveryOptionsInterface $deliveryOptions
     */
    public function __construct(\Context $context, \PrestaShop\PrestaShop\Adapter\Shipment\DeliveryOptionsInterface $deliveryOptions)
    {
    }
    /**
     * @return bool
     */
    public function customerHasLoggedIn()
    {
    }
    /**
     * @return Customer
     */
    public function getCustomer()
    {
    }
    /**
     * @return Cart
     */
    public function getCart()
    {
    }
    /**
     * @return int
     */
    public function getCustomerAddressesCount()
    {
    }
    public function setIdAddressDelivery($id_address)
    {
    }
    public function setIdAddressInvoice($id_address)
    {
    }
    public function getIdAddressDelivery()
    {
    }
    public function getIdAddressInvoice()
    {
    }
    public function setMessage($message)
    {
    }
    public function getMessage()
    {
    }
    public function setDeliveryOption($option)
    {
    }
    public function getSelectedDeliveryOption()
    {
    }
    public function getProductsByCarrier()
    {
    }
    public function getDeliveryOptions()
    {
    }
    public function setRecyclable($option)
    {
    }
    public function isRecyclable()
    {
    }
    public function setGift($gift, $gift_message)
    {
    }
    public function getGift()
    {
    }
    public function isGuestAllowed()
    {
    }
    public function getCheckoutURL()
    {
    }
}
