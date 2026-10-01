<?php

namespace PrestaShopBundle\Routing;

/**
 * This checker is bound to the LegacyController that wraps legacy controller, its matching condition are based on the query parameters.
 * Its priority is set low on purpose because it should be the last route to match in favor of all the other "real" Symfony route.
 */
#[\Symfony\Bundle\FrameworkBundle\Routing\Attribute\AsRoutingConditionService(priority: -1)]
class LegacyRouterChecker
{
    public function __construct(protected readonly \PrestaShopBundle\Entity\Repository\TabRepository $tabRepository, protected readonly \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, protected readonly \PrestaShopBundle\Routing\Converter\LegacyParametersConverter $legacyParametersConverter, protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    public function check(\Symfony\Component\HttpFoundation\Request $request): bool
    {
    }
}
