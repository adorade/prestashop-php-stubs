<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\ValueObject;

class EmailTemplateSource
{
    public const SOURCE_CORE = 'core';
    public const SOURCE_MODULE = 'module';
    public function __construct(string $source, string $moduleName = '')
    {
    }
    public static function buildCoreSource(): self
    {
    }
    public static function buildModuleSource(string $moduleName): self
    {
    }
    public function getSource(): string
    {
    }
    public function getModuleName(): string
    {
    }
    public function isCore(): bool
    {
    }
    public function isModule(): bool
    {
    }
}
