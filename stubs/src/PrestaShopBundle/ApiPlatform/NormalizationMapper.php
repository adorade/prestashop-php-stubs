<?php

namespace PrestaShopBundle\ApiPlatform;

class NormalizationMapper
{
    public const NORMALIZATION_MAPPING = 'normalization_mapping';
    protected \Symfony\Component\PropertyAccess\PropertyAccessorInterface $propertyAccessor;
    public function __construct()
    {
    }
    /**
     * Modify the normalized data based on a mapping, basically it copies some values from a path to another, the original
     * path is not modified.
     *
     * @param mixed|null $normalizedData
     * @param array $context
     */
    public function mapNormalizedData(mixed &$normalizedData, array &$context): void
    {
    }
    /**
     * Update normalization mapping when it contains indexes, for example:
     *
     *     '[categoriesInformation][categoriesInformation][@index][id]' => '[categories][@index][categoryId]',
     *
     * is transformed into:
     *
     *     '[categoriesInformation][categoriesInformation][0][id]' => '[categories][0][categoryId]',
     *     '[categoriesInformation][categoriesInformation][1][id]' => '[categories][1][categoryId]',
     *
     * depending on the computed array length from the normalized data.
     */
    protected function updateMappingIndexes(mixed $normalizedData, array &$normalizationMapping): void
    {
    }
    /**
     * Transform one of the mapping path if it contains indexes, the original path containing placeholders is cleaned.
     */
    protected function transformMappingPath(mixed $normalizedData, string $originPath, string $targetPath, array &$normalizationMapping): void
    {
    }
    /**
     * Dive through the data following a property path, when the path segment matching $indexPlaceholder is reached we
     * compute the length of the current array level and generate a mapping path for each element.
     */
    protected function computeMappingIndex(\Symfony\Component\PropertyAccess\PropertyPath $propertyPath, string $indexPlaceholder, mixed $normalizedData, string $originPath, string $targetPath, array &$normalizationMapping): void
    {
    }
}
