<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * Method shared between builders to check when a legacy object needs to be updated, mostly to update
 * the internal class local field that caches the legacy object model or when we check if the legacy
 * Context fields are in sync with the expected value from the builder.
 */
trait LegacyObjectCheckerTrait
{
    protected function legacyObjectNeedsUpdate(?\ObjectModel $objectModel, ?int $expectedId): bool
    {
    }
}
