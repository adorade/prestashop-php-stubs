<?php

namespace PrestaShopBundle\Form\Admin\Login;

class ResetPasswordType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
