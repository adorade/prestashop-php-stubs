<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\FeatureFlag;

class FeatureFlagType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var FormCloner
     */
    protected $formCloner;
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShopBundle\Form\FormCloner $formCloner)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function adaptSwitchOption(\Symfony\Component\Form\Event\PreSetDataEvent $event): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
