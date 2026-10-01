<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class AttributeGroupChoiceProvider provides attribute group choices and choices attributes.
 */
final class AttributeGroupChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface, \PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface
{
    /**
     * @param \PrestaShopBundle\Entity\Repository\AttributeGroupRepository $attributeGroupRepository
     * @param \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext
     * @param \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext
     */
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\AttributeGroupRepository $attributeGroupRepository, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, private \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext)
    {
    }
    /**
     * Get attribute groups choices
     *
     * @return array<string, int>
     */
    public function getChoices(): array
    {
    }
    /**
     * Get attribute groups choices attributes
     *
     * @return array<string, array{data-iscolorgroup: int}>
     */
    public function getChoicesAttributes(): array
    {
    }
}
