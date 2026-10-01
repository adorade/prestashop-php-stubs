<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\ImageSettings;

class RegenerateThumbnailsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\ImageTypeChoiceProvider $imageTypeChoiceProvider)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
