<?php

namespace PrestaShopBundle\Form\Admin\Improve\Shipping\Carrier;

class GeneralSettings extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\GroupByIdChoiceProvider $groupByIdChoiceProvider)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
