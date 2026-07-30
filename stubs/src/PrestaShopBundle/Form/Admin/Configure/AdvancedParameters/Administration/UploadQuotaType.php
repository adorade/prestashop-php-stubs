<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Administration;

class UploadQuotaType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const FIELD_MAX_SIZE_ATTACHED_FILES = 'max_size_attached_files';
    public const FIELD_MAX_SIZE_DOWNLOADABLE_FILE = 'max_size_downloadable_product';
    public const FIELD_MAX_SIZE_PRODUCT_IMAGE = 'max_size_product_image';
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
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
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
    }
}
