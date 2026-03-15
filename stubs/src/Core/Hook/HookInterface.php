<?php

namespace PrestaShop\PrestaShop\Core\Hook;

/**
 * Interface HookInterface defines contract for hook.
 */
interface HookInterface
{
    /**
     * Get hook name.
     *
     * @return string
     */
    public function getName();
    /**
     * Get hook parameters.
     *
     * @return array
     */
    public function getParameters();
}
