<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\Theme;

/**
 * Class ThemeLogosType is used to configure theme's logos.
 */
class ShopLogosType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param bool $isMultiShopEnabled
     * @param bool $isSingleShopContext
     * @param array $contextShopIds
     */
    public function __construct($isMultiShopEnabled, $isSingleShopContext, array $contextShopIds)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
