<?php

namespace PrestaShopBundle\Form\Admin\CustomerService\CustomerThread;

/**
 * Builds form for forwarding customer thread
 */
class ForwardCustomerThreadType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param TranslatorInterface $translator
     * @param FormChoiceProviderInterface $employeeChoiceProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $employeeChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
