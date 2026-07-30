<?php

/**
 * Class FeatureFlagCore even if the feature flag is mostly handled via its Doctrine entity, we need this legacy class
 * to handle the data installation for this entity.
 */
class FeatureFlagCore extends \ObjectModel
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $label_wording;
    /**
     * @var string
     */
    public $label_domain;
    /**
     * @var string
     */
    public $description_wording;
    /**
     * @var string
     */
    public $description_domain;
    /**
     * @var bool
     */
    public $state = \false;
    /**
     * @var string
     */
    public $stability;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'feature_flag', 'primary' => 'id_feature_flag', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'required' => \true, 'size' => 191], 'label_wording' => ['type' => self::TYPE_STRING, 'required' => \true, 'size' => 191], 'label_domain' => ['type' => self::TYPE_STRING, 'required' => \true, 'size' => 255], 'description_wording' => ['type' => self::TYPE_STRING, 'required' => \true, 'size' => 191], 'description_domain' => ['type' => self::TYPE_STRING, 'required' => \true, 'size' => 255], 'state' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'stability' => ['type' => self::TYPE_STRING, 'size' => 64, 'values' => [\PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagSettings::STABILITY_STABLE, \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagSettings::STABILITY_BETA], 'default' => \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagSettings::STABILITY_BETA]]];
    public static function isEnabled(string $name): bool
    {
    }
}
