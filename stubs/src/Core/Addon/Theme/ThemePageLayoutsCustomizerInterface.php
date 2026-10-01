<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

/**
 * Interface PageLayoutCustomizerInterface.
 */
interface ThemePageLayoutsCustomizerInterface
{
    /**
     * @param array $pageLayouts Customized layouts for pages
     */
    public function customize(array $pageLayouts);
}
