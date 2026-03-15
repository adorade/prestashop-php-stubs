<?php

namespace PrestaShop\PrestaShop\Core\Module\SourceHandler;

class ZipSourceHandler implements \PrestaShop\PrestaShop\Core\Module\SourceHandler\SourceHandlerInterface
{
    // module_name/module_name.php
    /** @var string */
    protected $modulePath;
    /** @var TranslatorInterface */
    protected $translator;
    public function __construct(string $modulePath, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function canHandle($source): bool
    {
    }
    public function getModuleName($source): string
    {
    }
    public function handle(string $source): void
    {
    }
}
