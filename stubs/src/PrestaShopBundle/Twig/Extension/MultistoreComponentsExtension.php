<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * Class MultistoreComponentsExtension provides helper function to get the multistore components' html in a template
 */
class MultistoreComponentsExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * MultistoreHeaderExtension constructor.
     *
     * @param MultistoreController $multistoreController
     */
    public function __construct(\PrestaShopBundle\Controller\Admin\MultistoreController $multistoreController)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
    }
    /**
     * @param bool $lockedToAllShopContext
     *
     * @return string
     */
    public function getMultistoreHeader(bool $lockedToAllShopContext = false): string
    {
    }
    /**
     * @param int $productId
     *
     * @return string
     */
    public function getMultistoreProductHeader(int $productId): string
    {
    }
}
