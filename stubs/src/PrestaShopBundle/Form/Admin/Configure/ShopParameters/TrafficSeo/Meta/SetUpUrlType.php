<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta;

/**
 * Class SetUpUrlType is responsible for providing form fields for Set up urls block located in
 * Shop parameters -> Traffic & Seo -> Seo & urls page.
 */
class SetUpUrlType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * SetUpUrlType constructor.
     *
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $canonicalUrlChoices
     * @param bool $isHtaccessFileWritable
     * @param bool $doesMainShopUrlExist
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $canonicalUrlChoices, $isHtaccessFileWritable, $isModRewriteActive, $doesMainShopUrlExist)
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
     *
     * @see MultistoreConfigurationTypeExtension
     */
    public function getParent(): string
    {
    }
}
