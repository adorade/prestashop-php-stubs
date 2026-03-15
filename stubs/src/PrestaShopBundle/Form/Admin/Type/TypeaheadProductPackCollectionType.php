<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form class is responsible to create a product, with or without attribute field.
 */
class TypeaheadProductPackCollectionType extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * {@inheritdoc}
     *
     * Add the vars to the view
     * Inject collection products
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
