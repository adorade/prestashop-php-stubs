<?php

namespace PrestaShop\PrestaShop\Core\Translation;

/**
 * Interface TranslationInterface defines a translation object (id, key, translation, domain)
 */
interface TranslationInterface
{
    /**
     * Database id
     *
     * @return int
     */
    public function getId(): int;
    /**
     * The translation key (wording)
     *
     * @return string
     */
    public function getKey(): string;
    /**
     * The translated string (message)
     *
     * @return string
     */
    public function getTranslation(): string;
    /**
     * The translation domain name
     *
     * @return string
     */
    public function getDomain(): string;
}
