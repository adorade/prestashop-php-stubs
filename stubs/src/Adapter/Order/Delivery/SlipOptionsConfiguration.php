<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Delivery;

/**
 * This class manages Order delivery slip options configuration.
 */
final class SlipOptionsConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    public const PREFIX = 'PS_DELIVERY_PREFIX';
    public const NUMBER = 'PS_DELIVERY_NUMBER';
    public const ENABLE_PRODUCT_IMAGE = 'PS_PDF_IMG_DELIVERY';
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * Returns configuration used to manage slip options in back office.
     *
     * @return array
     */
    public function getConfiguration()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function updateConfiguration(array $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateConfiguration(array $configuration)
    {
    }
}
