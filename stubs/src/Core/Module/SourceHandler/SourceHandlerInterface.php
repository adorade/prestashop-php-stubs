<?php

namespace PrestaShop\PrestaShop\Core\Module\SourceHandler;

interface SourceHandlerInterface
{
    /**
     * @param mixed $source
     *
     * @return bool
     */
    public function canHandle($source): bool;
    public function getModuleName($source): ?string;
    public function handle(string $source): void;
}
