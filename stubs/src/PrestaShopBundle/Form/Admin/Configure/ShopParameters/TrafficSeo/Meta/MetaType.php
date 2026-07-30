<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta;

/**
 * Class MetaType is responsible for providing form fields for Shop parameters -> Traffic & Seo ->
 * Seo & Urls -> add and edit forms.
 */
class MetaType extends \Symfony\Component\Form\AbstractType
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    public const TITLE_MAX_CHARS = 128;
    public const META_DESCRIPTION_MAX_CHARS = 255;
    public const RECOMMENDED_TITLE_LENGTH = 70;
    public const RECOMMENDED_DESCRIPTION_LENGTH = 160;
    /**
     * @param array $defaultPageChoices
     * @param array $modulePageChoices
     */
    public function __construct(array $defaultPageChoices, array $modulePageChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
