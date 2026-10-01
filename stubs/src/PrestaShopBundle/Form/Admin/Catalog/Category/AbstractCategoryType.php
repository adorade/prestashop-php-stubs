<?php

namespace PrestaShopBundle\Form\Admin\Catalog\Category;

/**
 * Class AbstractCategoryType.
 */
abstract class AbstractCategoryType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var \PrestaShop\PrestaShop\Core\ConfigurationInterface
     */
    protected $configuration;
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param array $customerGroupChoices
     * @param \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $customerGroupChoices, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
