<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

interface DeliveryOptionsInterface
{
    public function getSelectedDeliveryOption();
    public function getDeliveryOptions();
}
