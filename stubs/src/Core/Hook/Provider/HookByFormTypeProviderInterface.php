<?php

namespace PrestaShop\PrestaShop\Core\Hook\Provider;

/**
 * Defines contract for providing hooks from form types.
 */
interface HookByFormTypeProviderInterface
{
    /**
     * @param string[] $formTypes
     *
     * @return string[]
     */
    public function getHookNames(array $formTypes);
}
