<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * FormType used in rendering of "Search and Reset" action in Grids.
 */
class SearchAndResetType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(\Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator)
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
