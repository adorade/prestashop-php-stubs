<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is used as a container of sub forms, each sub form will be rendered as a part of navigation tab
 * component. Each first level child is used as a different tab, its label is used for the tab name and it's widget
 * as the tab content.
 */
class NavigationTabType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param LoggerInterface $logger
     * @param bool $isDebug
     */
    public function __construct(\Psr\Log\LoggerInterface $logger, bool $isDebug)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
