<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\Theme;

/**
 * Interface PageLayoutCustomizationFormFactoryInterface.
 */
interface PageLayoutCustomizationFormFactoryInterface
{
    /**
     * @param LayoutCustomizationPage[] $customizablePages
     *
     * @return FormInterface
     */
    public function create(array $customizablePages);
}
