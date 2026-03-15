<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\Pages;

/**
 * Defines form for Improve > Design > Pages > Categories create/edit actions
 */
class CmsPageCategoryType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const NAME_MAX_LENGTH = 64;
    public const META_TITLE_MAX_LENGTH = 255;
    public const META_KEYWORDS_MAX_LENGTH = 255;
    public const META_DESCRIPTION_MAX_LENGTH = 512;
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $allCmsCategories
     * @param bool $isShopFeatureEnabled
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $allCmsCategories, $isShopFeatureEnabled)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
