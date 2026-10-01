<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\FeatureFlag;

/**
 * Passes data between the application layer in charge of the feature flags form
 * and the domain layer in charge of the feature flags model
 */
class FeatureFlagsFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(protected \Doctrine\ORM\EntityManagerInterface $doctrineEntityManager, protected readonly string $stability, private \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer, private \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagManager $featureFlagManager, private readonly \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multiStoreFeature, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    public function getData()
    {
    }
    public function setData(array $flagsData)
    {
    }
    protected function validateFlagsData(array $flagsData): bool
    {
    }
    protected function getOneFeatureFlagByName(string $featureFlagName): ?\PrestaShopBundle\Entity\FeatureFlag
    {
    }
}
