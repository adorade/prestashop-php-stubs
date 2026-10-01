<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

class DeliveryOptionsProvider extends \DeliveryOptionsFinderCore
{
    public function __construct(\Context $context, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\Presenter\Object\ObjectPresenter $objectPresenter, \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter $priceFormatter, \PrestaShop\PrestaShop\Adapter\Presenter\Cart\CartPresenter $cartPresenter)
    {
    }
    public function getDeliveryOptions()
    {
    }
    /**
     * @return array
     */
    public function getProductsByCarrier()
    {
    }
}
