<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\ImageSettings;

class ImageSettingsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, private readonly \PrestaShop\PrestaShop\Core\Image\AvifExtensionChecker $avifExtensionChecker)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
