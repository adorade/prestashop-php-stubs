<?php

namespace PrestaShopBundle\Api\Stock;

class Movement
{
    public function __construct(\PrestaShopBundle\Entity\ProductIdentity $productIdentity, $delta)
    {
    }
    /**
     * @return ProductIdentity
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
