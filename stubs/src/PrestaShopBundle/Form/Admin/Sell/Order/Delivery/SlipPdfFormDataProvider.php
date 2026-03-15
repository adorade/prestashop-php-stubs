<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order\Delivery;

/**
 * This class is responsible of managing the data manipulated pdf form
 * in "Sells > Orders > Delivery Slips" page.
 */
final class SlipPdfFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Order\Delivery\SlipPdfConfiguration $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setData(array $data)
    {
    }
}
