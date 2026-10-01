<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\AddressFormat;

/**
 * Pure Core implementation of {@see AddressFormatFieldsProviderInterface}.
 *
 * Field lists per object are hardcoded here — they define the merchant-facing
 * picker surface for the country address-format builder, not a runtime reflection
 * of ObjectModel public properties. Decoupling them from legacy class shapes
 * keeps the picker stable and lets us drop the legacy AddressFormat dependency.
 *
 * Required-fields are sourced from the existing GetRequiredFieldsForAddress
 * query (DB-managed list) merged with a static minimum that the legacy
 * validator also enforced regardless of merchant configuration.
 */
final class AddressFormatFieldsProvider implements \PrestaShop\PrestaShop\Core\Domain\Country\AddressFormat\AddressFormatFieldsProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    public function getPickerClasses(): array
    {
    }
    public function getFieldsForClass(string $className): array
    {
    }
    public function getRequiredFields(): array
    {
    }
}
