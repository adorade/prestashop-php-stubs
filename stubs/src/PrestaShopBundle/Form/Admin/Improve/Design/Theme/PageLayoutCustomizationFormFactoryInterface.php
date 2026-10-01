<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\Theme;

/**
 * Interface PageLayoutCustomizationFormFactoryInterface.
 */
interface PageLayoutCustomizationFormFactoryInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Meta\QueryResult\LayoutCustomizationPage[] $customizablePages
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    public function create(array $customizablePages);
}
