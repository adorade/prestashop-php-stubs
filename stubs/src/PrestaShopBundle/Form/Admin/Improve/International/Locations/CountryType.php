<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Locations;

class CountryType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $translator;
    /**
     * @var bool
     */
    protected $isMultistoreEnabled;
    /**
     * @var \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
     */
    protected $zoneChoiceProvider;
    /**
     * ZoneType constructor.
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, bool $isMultistoreEnabled, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $zoneChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
