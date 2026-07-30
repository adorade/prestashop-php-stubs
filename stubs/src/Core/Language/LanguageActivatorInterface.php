<?php

namespace PrestaShop\PrestaShop\Core\Language;

/**
 * Interface LanguageActivatorInterface defines contract for language activator.
 */
interface LanguageActivatorInterface
{
    /**
     * Activate language.
     *
     * @param int $langId
     */
    public function enable($langId);
    /**
     * Deactivate language.
     *
     * @param int $langId
     */
    public function disable($langId);
}
