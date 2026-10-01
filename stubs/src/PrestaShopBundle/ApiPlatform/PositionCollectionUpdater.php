<?php

namespace PrestaShopBundle\ApiPlatform;

/**
 * Used to adapt the data from array of positions, so far all it needs to do is transform
 * ['attributeId' => 5] into ['rowId' => 5]. To do that it detects the array properties with
 * the PositionCollection attribute.
 */
class PositionCollectionUpdater
{
    public function __construct(protected \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory)
    {
    }
    public function normalizePositionCollection(array $normalizedData, string $type): array
    {
    }
}
