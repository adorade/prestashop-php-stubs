<?php

namespace PrestaShopBundle\Form\Admin\Login;

/**
 * Back-office login form
 */
class LoginType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, protected readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $shopConfiguration)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    public function getBlockPrefix()
    {
    }
}
