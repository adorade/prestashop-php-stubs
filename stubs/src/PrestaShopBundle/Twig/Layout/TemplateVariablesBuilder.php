<?php

namespace PrestaShopBundle\Twig\Layout;

/**
 * Allows you to construct variables used in rendering
 */
class TemplateVariablesBuilder
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, private readonly bool $debugMode, private readonly \PrestaShopBundle\Security\Admin\UserTokenManager $userTokenManager, private readonly string $psVersion, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly \PrestaShopBundle\Twig\Layout\MenuBuilder $menuBuilder, private readonly \PrestaShopBundle\Entity\Repository\TabRepository $tabRepository, private readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly \PrestaShop\PrestaShop\Core\Context\LegacyControllerContext $legacyControllerContext, private readonly \PrestaShop\PrestaShop\Adapter\Feature\MultistoreFeature $multistoreFeature, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    public function build(): \PrestaShopBundle\Twig\Layout\TemplateVariables
    {
    }
}
