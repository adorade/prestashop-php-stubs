<?php

namespace PrestaShop\PrestaShop\Adapter\Language;

/**
 * @experimental This will be refactored once the Context replacement architecture is decided
 */
class ContextLanguageProvider implements \PrestaShop\PrestaShop\Core\Language\ContextLanguageProviderInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context)
    {
    }
    public function getLanguageId(): int
    {
    }
}
