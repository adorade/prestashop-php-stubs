<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Class TranslatableType adds translatable inputs with custom inner type to forms.
 * Language selection uses a dropdown.
 */
class TranslatableType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $availableLocales
     * @param UrlGeneratorInterface $urlGenerator
     * @param bool $saveFormLocaleChoice
     * @param int $defaultFormLanguageId
     * @param int $defaultShopLanguageId
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $availableLocales, \Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator, $saveFormLocaleChoice, $defaultFormLanguageId, $defaultShopLanguageId)
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
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
    }
}
