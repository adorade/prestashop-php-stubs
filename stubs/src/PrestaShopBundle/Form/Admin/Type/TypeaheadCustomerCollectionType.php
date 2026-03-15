<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form class is responsible to create a customer.
 */
class TypeaheadCustomerCollectionType extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    protected $customerAdapter;
    /**
     * {@inheritdoc}
     *
     * @param object $customerAdapter
     */
    public function __construct($customerAdapter)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Add the vars to the view
     * Inject collection customer
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Builds the form.
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
    /**
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
    }
}
