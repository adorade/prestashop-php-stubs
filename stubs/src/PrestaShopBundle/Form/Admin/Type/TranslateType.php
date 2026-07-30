<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form class is responsible to create a translatable form.
 * Language selection uses tabs.
 */
class TranslateType extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @param bool $saveFormLocaleChoice
     * @param int $defaultFormLanguageId
     * @param int $defaultShopLanguageId
     */
    public function __construct(\Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator, $saveFormLocaleChoice, $defaultFormLanguageId, $defaultShopLanguageId)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Builds form fields for each locales
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Add the var locales and defaultLocale to the view
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
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
    }
}
