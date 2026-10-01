<?php

namespace PrestaShop\PrestaShop\Core\Context;

class LegacyControllerContextBuilder
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext, protected readonly array $controllersLockedToAllShopContext, protected readonly \PrestaShopBundle\Entity\Repository\TabRepository $tabRepository, protected readonly \Symfony\Component\DependencyInjection\ContainerInterface $container, protected readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, protected readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, protected readonly string $adminFolderName, protected string $psVersion, protected readonly \Twig\Environment $twig)
    {
    }
    public function build(): \PrestaShop\PrestaShop\Core\Context\LegacyControllerContext
    {
    }
    public function setControllerName(string $controllerName): self
    {
    }
    public function setRedirectionUrl(?string $redirectionUrl): self
    {
    }
}
