<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Administration;

/**
 * This class is responsible of managing the data manipulated using forms
 * in "Configure > Advanced Parameters > Administration" page.
 */
final class FormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public const ERROR_NOT_NUMERIC_OR_LOWER_THAN_ZERO = 1;
    public const ERROR_COOKIE_LIFETIME_MAX_VALUE_EXCEEDED = 2;
    public const ERROR_COOKIE_SAMESITE_NONE = 3;
    public const ERROR_MAX_SIZE_ATTACHED_FILES = 4;
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $dataConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setData(array $data)
    {
    }
}
