<?php

namespace PrestaShopBundle\Api\Stock;

class Movement
{
    public function __construct(\PrestaShopBundle\Entity\ProductIdentity $productIdentity, $delta)
    {
    }
    /**
     * @return \PrestaShopBundle\Entity\ProductIdentity
     */
    public function getProductIdentity()
    {
    }
    /**
     * @return int
     */
    public function getDelta()
    {
    }
}
