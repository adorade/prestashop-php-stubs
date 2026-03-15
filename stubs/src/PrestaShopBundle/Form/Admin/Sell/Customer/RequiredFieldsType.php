<?php

namespace PrestaShopBundle\Form\Admin\Sell\Customer;

/**
 * Defines form for customer required fields
 */
class RequiredFieldsType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param array $customerRequiredFieldsChoices
     */
    public function __construct(array $customerRequiredFieldsChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
