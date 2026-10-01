<?php

namespace PrestaShop\PrestaShop\Core\Translation\Builder\Map;

/**
 * This class is the representation of the last sheet of a translation catalogue : The message itself.
 * A message is composed by the default wording,
 * its translation within the project files (for crowdin or any translation tool),
 * its translation made in the BO interface and stored in DB.
 * If a message has file or user translation, it's considered as translated.
 */
class Message
{
    public function __construct(string $defaultTranslation)
    {
    }
    public function getKey(): string
    {
    }
    public function setFileTranslation(string $fileTranslation): self
    {
    }
    public function setUserTranslation(string $userTranslation): self
    {
    }
    /**
     * Returns whether a message is translated or not.
     * It's TRUE if one of fileTranslation or userTranslation is not null
     */
    public function isTranslated(): bool
    {
    }
    /**
     * Returns the translated string
     * UserTranslation OR FileTranslation OR Default key
     *
     * @return string
     */
    public function getTranslation(): string
    {
    }
    /**
     * Check if data contains search word.
     *
     * @param array $search
     *
     * @return bool
     */
    public function contains(array $search): bool
    {
    }
    /**
     * @return array
     */
    public function toArray(): array
    {
    }
}
