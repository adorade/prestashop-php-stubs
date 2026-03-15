<?php

namespace PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder;

interface CombinationNameBuilderInterface
{
    /**
     * Build combination name from related attributes and attribute group names
     *
     * @param CombinationAttributeInformation[] $attributesInfo
     *
     * @return string
     */
    public function buildName(array $attributesInfo): string;
    /**
     * Build combination full name from related product and attributes and attribute group names
     *
     * @param string $productName
     * @param CombinationAttributeInformation[] $attributesInfo
     *
     * @return string
     */
    public function buildFullName(string $productName, array $attributesInfo): string;
}
