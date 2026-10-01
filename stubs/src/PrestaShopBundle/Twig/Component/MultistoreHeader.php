<?php

namespace PrestaShopBundle\Twig\Component;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/Layout/multistore_header.html.twig')]
class MultistoreHeader extends \PrestaShopBundle\Twig\Component\AbstractMultistoreHeader
{
    public function __construct(protected readonly \PrestaShopBundle\Twig\Layout\MenuBuilder $menuBuilder, protected readonly array $controllersLockedToAllShopContext, \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, \Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Util\ColorBrightnessCalculator $colorBrightnessCalculator, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext)
    {
    }
    public function mount(): void
    {
    }
    public function isLockedToAllShopContext(): bool
    {
    }
}
