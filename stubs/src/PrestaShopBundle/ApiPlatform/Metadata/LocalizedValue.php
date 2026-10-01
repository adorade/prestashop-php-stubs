<?php

namespace PrestaShopBundle\ApiPlatform\Metadata;

/**
 * This attribute can be added on a property in an API resource class, when set the localized values
 * are no longer index by Language IDs but by Language's locale instead. It impacts both inputs and outputs
 * where JSON localized value must be indexed by locale:
 *
 *   {names: {"2": "english name", "4": "nom français"}} => {"names": {"en-US": "english name", "fr-FR": "nom français"}}
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class LocalizedValue extends \Symfony\Component\Serializer\Attribute\Context
{
    public const IS_LOCALIZED_VALUE = 'is_localized_value';
    public const LOCALIZED_VALUE_PARAMETERS = 'localized_value_parameters';
    public const DENORMALIZED_KEY = 'denormalized_key';
    public const NORMALIZED_KEY = 'normalized_key';
    public const LOCALE_KEY = 'locale_key';
    public const ID_KEY = 'id_key';
    public function __construct(string $denormalizedKey = self::LOCALE_KEY, string $normalizedKey = self::LOCALE_KEY, array $localizedParameters = [], array $context = [], array $normalizationContext = [], array $denormalizationContext = [], array|string $groups = [])
    {
    }
}
