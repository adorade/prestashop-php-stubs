<?php

namespace PrestaShopBundle\Form\Admin\Type;

class EmailType extends \Symfony\Component\Form\Extension\Core\Type\EmailType
{
    public function __construct(protected readonly \PrestaShopBundle\Form\DataTransformer\IDNConverterDataTransformer $IDNConverterDataTransformer, protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
