<?php

namespace PrestaShopBundle\Form\Admin\AdvancedParameters\Performance;

/**
 * This form class generates the "Optional Features" form in Performance page.
 */
class OptionalFeaturesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param bool $isCombinationsUsed
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, $isCombinationsUsed)
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
    public function getBlockPrefix()
    {
    }
}
