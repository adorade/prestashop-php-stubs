<?php

namespace PrestaShop\PrestaShop\Core\Hook\Provider;

/**
 * Defines contract for providing hooks by using service ids.
 */
interface HookByServiceIdsProviderInterface
{
    /**
     * @param string[] $gridDefinitionServiceIds
     *
     * @return string[]
     */
    public function getHookNames(array $gridDefinitionServiceIds);
}
