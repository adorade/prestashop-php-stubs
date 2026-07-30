<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Administration;

/**
 * This class is responsible of managing the data manipulated using general form
 * in "Configure > Advanced Parameters > Administration" page.
 */
final class GeneralDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * If you set cookie lifetime value too high there can be multiple problems.
     * Hours are converted to seconds, so int might be turned to float if it's way to high.
     * Cookie classes crash if lifetime goes beyond year 9999, there are probably multiple other things.
     * So we need to set some sort of max value. 100 years seems like a lifetime beyond reasonable use.
     */
    public const MAX_COOKIE_VALUE = 876000;
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $dataConfiguration, bool $sslEnabled, bool $sslEnabledEverywhere)
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
