<?php

namespace PrestaShopBundle\Entity\Repository;

/**
 * FeatureAttributeRepository
 *
 * @deprecated since 9.1 and will be removed in 10.0, this repository don't have to be used anymore. Use instead FeaturesRepository or AttributesRepository directly.
 */
class FeatureAttributeRepository
{
    use \PrestaShopBundle\Entity\Repository\NormalizeFieldTrait;
    /**
     * FeatureAttributeRepository constructor.
     */
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, private readonly \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository, private readonly \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository)
    {
    }
    /**
     * @return mixed
     */
    public function getAttributes()
    {
    }
    /**
     * @return mixed
     */
    public function getFeatures()
    {
    }
}
