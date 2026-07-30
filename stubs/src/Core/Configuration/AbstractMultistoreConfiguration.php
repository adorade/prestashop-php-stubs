<?php

namespace PrestaShop\PrestaShop\Core\Configuration;

abstract class AbstractMultistoreConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * @var Configuration
     */
    protected $configuration;
    /**
     * @var Context
     */
    protected $shopContext;
    /**
     * @var FeatureInterface
     */
    protected $multistoreFeature;
    /**
     * AbstractMultistoreConfiguration constructor.
     *
     * @param Configuration $configuration
     * @param Context $shopContext
     * @param FeatureInterface $multistoreFeature
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature)
    {
    }
    abstract protected function buildResolver(): \Symfony\Component\OptionsResolver\OptionsResolver;
    /**
     * @return ShopConstraint|null
     */
    public function getShopConstraint(): ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
    /**
     * @param string $configurationKey BO configuration key, ex: PS_SHOP_ENABLE (as stored in the configuration db table)
     * @param string $fieldName
     * @param array $input an associative array where keys are field names and values are field values
     * @param ShopConstraint|null $shopConstraint
     * @param array $options<int, string> Options @deprecated Will be removed in next major
     */
    protected function updateConfigurationValue(string $configurationKey, string $fieldName, array $input, ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, array $options = []): void
    {
    }
    /**
     * This method checks that:
     * - Only defined configuration fields exist
     * - In single or group shop context, multistore fields are added to the list of defined fields, so that no error
     * is triggered because of additional checkboxes
     * - In all shop context, all fields are required
     *
     * @param array $configurationInputValues
     *
     * @return bool
     */
    public function validateConfiguration(array $configurationInputValues): bool
    {
    }
}
