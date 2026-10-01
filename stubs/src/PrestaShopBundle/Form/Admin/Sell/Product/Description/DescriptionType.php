<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Description;

class DescriptionType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param \Symfony\Component\Routing\RouterInterface $router
     * @param string $employeeIsoCode
     * @param int $shortDescriptionMaxLength
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Symfony\Component\Routing\RouterInterface $router, string $employeeIsoCode, int $shortDescriptionMaxLength)
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
