<?php

namespace PrestaShopBundle\Form\Admin\Type;

class DateRangeType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;
    /**
     * @var FormCloner
     */
    protected $formCloner;
    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShopBundle\Form\FormCloner $formCloner)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function adaptUnlimited(\Symfony\Component\Form\FormEvent $event): void
    {
    }
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
