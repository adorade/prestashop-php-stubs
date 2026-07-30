<?php

namespace PrestaShop\PrestaShop\Core\Module\SourceHandler;

class SourceHandlerFactory
{
    /**
     * @param SourceHandlerInterface[] $handlers
     */
    public function __construct(iterable $handlers = [])
    {
    }
    public function addHandler(\PrestaShop\PrestaShop\Core\Module\SourceHandler\SourceHandlerInterface $sourceHandler): void
    {
    }
    public function getHandler($source): \PrestaShop\PrestaShop\Core\Module\SourceHandler\SourceHandlerInterface
    {
    }
}
