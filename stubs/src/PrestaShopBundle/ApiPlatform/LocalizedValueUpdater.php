<?php

namespace PrestaShopBundle\ApiPlatform;

/**
 * This service can interpret the context values (either set manually ir via the LocalizeValue attribute)
 * and update the provided array by changing its keys, it can switch from an array index by Language ID
 * or by Language locale.
 */
class LocalizedValueUpdater
{
    public function __construct(protected \PrestaShopBundle\Entity\Repository\LangRepository $languageRepository, protected \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory)
    {
    }
    /**
     * @var array<int, string>
     */
    protected array $localesByID;
    /**
     * @var array<string, int>
     */
    protected array $idsByLocale;
    /**
     * @throws \PrestaShopBundle\ApiPlatform\Exception\LocaleNotFoundException
     */
    public function denormalizeLocalizedValue(mixed $localizedValue, string $propertyName, array $context): mixed
    {
    }
    /**
     * @throws \PrestaShopBundle\ApiPlatform\Exception\LocaleNotFoundException
     */
    public function normalizeLocalizedValue(mixed $localizedValue, string $propertyName, array $context): mixed
    {
    }
    /**
     * Analyze a class type and extract attributes to check for localized values based on the context associated to
     * each property (combining properties attributes and context parameter). The array returned contains the list of
     * localized value properties, their name is used as the index the value contains the independent context of each
     * property.
     *
     * The returned array can be used for future updates by specifying it in the $context[LocalizedValue::LOCALIZED_VALUE_PARAMETERS]
     *
     * @param string $type Class FQCN
     * @param array $context Serialization context
     *
     * @return array
     */
    public function getLocalizedAttributesContext(string $type, array $context = []): array
    {
    }
    protected function isAttributeLocalized(array $context, string $attribute): bool
    {
    }
    /**
     * @throws \PrestaShopBundle\ApiPlatform\Exception\LocaleNotFoundException
     */
    protected function updateLocalizedValue(mixed $localizedValue, string $propertyName, array $context, bool $denormalize): mixed
    {
    }
    /**
     * Return the localized array with keys based on locale string value transformed into integer database IDs.
     *
     * @param array $localizedValue
     *
     * @return array
     *
     * @throws \PrestaShopBundle\ApiPlatform\Exception\LocaleNotFoundException
     */
    protected function updateLanguageLocalesWithIDs(array $localizedValue): array
    {
    }
    /**
     * Return the localized array with keys based on integer database IDs transformed into locale string values.
     *
     * @param array $localizedValue
     *
     * @return array
     *
     * @throws \PrestaShopBundle\ApiPlatform\Exception\LocaleNotFoundException
     */
    protected function updateLanguageIndexesWithLocales(array $localizedValue): array
    {
    }
    /**
     * Fetches the language mapping once and save them in local property for better performance.
     *
     * @return void
     */
    protected function fetchLanguagesMapping(): void
    {
    }
    protected function getAttributeDenormalizationContext(string $class, string $attribute, array $context): array
    {
    }
    protected function getAttributeMetadata(object|string $objectOrClass, string $attribute): ?\Symfony\Component\Serializer\Mapping\AttributeMetadataInterface
    {
    }
    protected function getGroups(array $context): array
    {
    }
}
