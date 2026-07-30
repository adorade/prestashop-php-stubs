<?php

namespace PrestaShop\PrestaShop\Core\Hook;

/**
 * Interface RenderedHookInterface defines contract for rendered hook.
 */
interface RenderedHookInterface
{
    /**
     * Get rendered hook.
     *
     * @return HookInterface
     */
    public function getHook();
    /**
     * Get rendered content.
     *
     * @return array
     */
    public function getContent();
    /**
     * Returns displayable content.
     *
     * @return string
     */
    public function outputContent();
}
