<?php

namespace PrestaShopBundle\Twig\Component\Legacy;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig')]
class LegacySessionAlert
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, protected readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext)
    {
    }
    public function getConfirmationMessage(): string
    {
    }
    public function getErrorMessage(): string
    {
    }
    public function getErrors(): array
    {
    }
    public function getWarnings(): array
    {
    }
    public function getInformations(): array
    {
    }
    public function getConfirmations(): array
    {
    }
}
