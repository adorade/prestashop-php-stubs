<?php

namespace PrestaShopBundle\Form\Admin\Type;

class EmailType extends \Symfony\Component\Form\Extension\Core\Type\EmailType
{
    public function __construct(\PrestaShopBundle\Form\DataTransformer\IDNConverterDataTransformer $IDNConverterDataTransformer)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
