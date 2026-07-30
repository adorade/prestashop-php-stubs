<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\FeatureFlag;

/**
 * Passes data between the application layer in charge of the feature flags form
 * and the domain layer in charge of the feature flags model
 */
class FeatureFlagsFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /** @var EntityManagerInterface */
    protected $doctrineEntityManager;
    /** @var string */
    protected $stability;
    /**
     * @param EntityManagerInterface $doctrineEntityManager
     * @param string $stability
     * @param CacheCleanerInterface $cacheCleaner
     */
    public function __construct(\Doctrine\ORM\EntityManagerInterface $doctrineEntityManager, string $stability, \PrestaShopBundle\Routing\Converter\CacheCleanerInterface $cacheCleaner)
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
