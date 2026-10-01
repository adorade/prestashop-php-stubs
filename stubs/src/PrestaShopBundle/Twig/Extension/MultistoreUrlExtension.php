<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * Class MultiStoreUrlExtension is responsible for providing a way to generate url with setShopContext parameter.
 */
class MultistoreUrlExtension extends \Twig\Extension\AbstractExtension
{
    public const SHOP_CONTEXT_PARAMETER = 'setShopContext';
    /**
     * @var \Symfony\Component\HttpFoundation\RequestStack
     */
    protected $requestStack;
    /**
     * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
     */
    public function __construct(\Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
    }
    /**
     * Generate URL from current request for a specific shop group.
     *
     * @param int|null $id
     * @param string|null $prefix
     *
     * @return string
     */
    public function generateUrl(?int $id = null, ?string $prefix = null): string
    {
    }
    /**
     * Generate URL from current request for a specific shop group.
     *
     * @param \PrestaShopBundle\Entity\ShopGroup $group
     *
     * @return string
     */
    public function generateGroupUrl(\PrestaShopBundle\Entity\ShopGroup $group): string
    {
    }
    /**
     * Generate URL from current request for a specific shop.
     *
     * @param \PrestaShopBundle\Entity\Shop $shop
     *
     * @return string
     */
    public function generateShopUrl(?\PrestaShopBundle\Entity\Shop $shop = null): string
    {
    }
}
