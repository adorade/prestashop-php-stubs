<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Email;

/**
 * Class EmailConfigurationType defines email sending configuration.
 */
class EmailConfigurationType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param FormChoiceProviderInterface $mailMethodChoiceProvider
     * @param FormChoiceProviderInterface $contactsChoiceProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $mailMethodChoiceProvider, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $contactsChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
