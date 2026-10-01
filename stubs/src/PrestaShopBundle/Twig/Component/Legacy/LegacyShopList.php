<?php

namespace PrestaShopBundle\Twig\Component\Legacy;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig')]
class LegacyShopList
{
    protected ?string $renderedShops = null;
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Feature\MultistoreFeature $multistoreFeature)
    {
    }
    public function getShopList(): ?string
    {
    }
}
