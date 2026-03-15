<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Employee;

/**
 * Class EmployeeOptionsType defines form for employee options.
 */
class EmployeeOptionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param bool $canOptionsBeChanged
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, $canOptionsBeChanged)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
