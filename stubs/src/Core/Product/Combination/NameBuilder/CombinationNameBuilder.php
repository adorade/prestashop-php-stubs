<?php

namespace PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder;

/**
 * Builds combination name by attributes information
 */
class CombinationNameBuilder implements \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;
    /**
     * @var string
     */
    protected $attributesSeparator;
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, string $attributesSeparator, string $attributesInsideSeparator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildName(array $attributesInfo): string
    {
    }
    protected function translateAttribute(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\CombinationAttributeInformation $combinationAttributeInfo): string
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildFullName(string $productName, array $attributesInfo): string
    {
    }
}
