<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\Pages;

/**
 * Defines Improve > Design > Pages cms page form
 */
class CmsPageType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const TITLE_MAX_CHARS = 255;
    public const META_DESCRIPTION_MAX_CHARS = 512;
    public const META_KEYWORD_MAX_CHARS = 512;
    public const FRIENDLY_URL_MAX_CHARS = 128;
    public const RECOMMENDED_TITLE_LENGTH = 70;
    public const RECOMMENDED_DESCRIPTION_LENGTH = 160;
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $allCmsCategories
     * @param bool $isMultiShopEnabled
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $allCmsCategories, $isMultiShopEnabled)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
