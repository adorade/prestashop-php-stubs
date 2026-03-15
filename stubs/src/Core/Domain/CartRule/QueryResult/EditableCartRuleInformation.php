<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult;

class EditableCartRuleInformation
{
    public function __construct(array $localizedNames, string $description, string $code, bool $highlight, bool $partialUse, int $priority, bool $enabled)
    {
    }
    /**
     * @return array
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
    }
    /**
     * @return string
     */
    public function getCode(): string
    {
    }
    /**
     * @return bool
     */
    public function isHighlight(): bool
    {
    }
    /**
     * @return bool
     */
    public function isPartialUse(): bool
    {
    }
    /**
     * @return int
     */
    public function getPriority(): int
    {
    }
    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
    }
}
