<?php

namespace PrestaShopBundle\Twig\Component;

abstract class AbstractMultistoreHeader
{
    protected string $contextColor = '';
    protected string $contextName = '';
    protected array $groupList = [];
    protected \Link $link;
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \Doctrine\ORM\EntityManagerInterface $entityManager, protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Core\Util\ColorBrightnessCalculator $colorBrightnessCalculator, protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, protected readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext)
    {
    }
    protected function doMount(): void
    {
    }
    public function isMultistoreUsed(): bool
    {
    }
    public function isAllShopContext(): bool
    {
    }
    public function getContextShopId(): ?int
    {
    }
    public function getContextShopGroupId(): ?int
    {
    }
    public function getContextName(): string
    {
    }
    public function getContextColor(): string
    {
    }
    public function isTitleDark(): bool
    {
    }
    public function getColorConfigLink(): string
    {
    }
    public function getLink(): \Link
    {
    }
    public function getGroupList(): array
    {
    }
    public function isAllShopsAllowed(): bool
    {
    }
}
