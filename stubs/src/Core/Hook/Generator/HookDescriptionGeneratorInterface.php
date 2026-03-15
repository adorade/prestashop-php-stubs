<?php

namespace PrestaShop\PrestaShop\Core\Hook\Generator;

/**
 * Defines contract for generating description for hook names.
 */
interface HookDescriptionGeneratorInterface
{
    /**
     * @param string $hookName
     *
     * @return HookDescription
     */
    public function generate($hookName);
}
