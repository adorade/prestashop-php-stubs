<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\AddressFormat;

/**
 * Pure Core implementation of {@see AddressFormatCheckerInterface}.
 *
 * Validates an address-format string against the picker's known object/field
 * surface (provided by {@see AddressFormatFieldsProviderInterface}) without
 * touching the legacy AddressFormat ObjectModel. Encapsulates the same rules
 * the legacy widget enforced:
 *
 *   - tokens are split on non-word/non-colon characters
 *   - bare tokens must name a valid Address field
 *   - prefixed `Object:field` tokens must name an exposed picker class with a
 *     known field on it
 *   - duplicate tokens are rejected
 *   - all required fields must be present (bare entries match Address tokens)
 *
 * Errors are translated through the Symfony TranslatorInterface so unit tests
 * and the form layer get human-readable strings without booting the legacy
 * Context.
 */
final class AddressFormatChecker implements \PrestaShop\PrestaShop\Core\Domain\Country\AddressFormat\AddressFormatCheckerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Domain\Country\AddressFormat\AddressFormatFieldsProviderInterface $fieldsProvider, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function validate(string $format): array
    {
    }
}
