<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\General;

/**
 * Class returning the content of the form in the maintenance page.
 * To be found in Configure > Shop parameters > General > Maintenance.
 */
class MaintenanceType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * MaintenanceType constructor.
     *
     * @param TranslatorInterface $translator
     * @param array<int, string> $locales
     * @param string $currentIp
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, string $currentIp)
    {
    }
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @see MultistoreConfigurationTypeExtension
     */
    public function getParent(): string
    {
    }
}
