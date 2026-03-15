<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Locations;

class ZoneType extends \Symfony\Component\Form\AbstractType
{
    /**
     * ZoneType constructor.
     *
     * @param TranslatorInterface $translator
     * @param bool $isMultistoreEnabled
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, bool $isMultistoreEnabled)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
