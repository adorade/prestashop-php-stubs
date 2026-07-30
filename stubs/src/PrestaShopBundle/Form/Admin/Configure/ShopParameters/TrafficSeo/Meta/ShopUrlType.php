<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta;

/**
 * Class ShopUrlType is responsible for providing form fields for
 * Shop parameters -> Traffic & Seo -> Seo & Urls -> Shop urls block.
 */
class ShopUrlType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * ShopUrlType constructor.
     *
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param bool $isShopFeatureActive
     * @param bool $doesMainShopUrlExist
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, bool $isShopFeatureActive, bool $doesMainShopUrlExist)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
