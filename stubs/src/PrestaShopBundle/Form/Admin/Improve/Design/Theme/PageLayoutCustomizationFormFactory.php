<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\Theme;

/**
 * Class PageLayoutCustomizationFormFactory creates form for Front Office theme's pages layout customization.
 */
final class PageLayoutCustomizationFormFactory implements \PrestaShopBundle\Form\Admin\Improve\Design\Theme\PageLayoutCustomizationFormFactoryInterface
{
    /**
     * @param FormFactoryInterface $formFactory
     * @param ThemeRepository $themeRepository
     * @param string $shopThemeName
     */
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository $themeRepository, $shopThemeName)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(array $customizablePages)
    {
    }
}
