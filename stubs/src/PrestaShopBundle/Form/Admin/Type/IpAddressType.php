<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Extended input type for IP addresses
 * Displays a bouton to add the user's one to the list.
 */
class IpAddressType extends \Symfony\Component\Form\Extension\Core\Type\TextType
{
    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
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
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
}
