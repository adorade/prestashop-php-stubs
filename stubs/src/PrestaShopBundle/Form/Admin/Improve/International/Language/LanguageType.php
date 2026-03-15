<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Language;

/**
 * Builds language's add/edit form
 */
class LanguageType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * LanguageType constructor.
     *
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param bool $isMultistoreFeatureActive
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, bool $isMultistoreFeatureActive)
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
