<?php

namespace PrestaShop\PrestaShop\Core\Language;

/**
 * @experimental This will be refactored once the Context replacement architecture has been decided
 */
interface ContextLanguageProviderInterface
{
    public function getLanguageId(): int;
}
