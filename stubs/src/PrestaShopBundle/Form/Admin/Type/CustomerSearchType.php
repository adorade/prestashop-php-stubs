<?php

namespace PrestaShopBundle\Form\Admin\Type;

class CustomerSearchType extends \PrestaShopBundle\Form\Admin\Type\EntitySearchInputType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
