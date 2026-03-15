<?php

namespace PrestaShop\PrestaShop\Adapter\Import\Handler;

/**
 * Class ImportHandlerFinder is responsible for finding a proper import handler.
 */
final class ImportHandlerFinder implements \PrestaShop\PrestaShop\Core\Import\Handler\ImportHandlerFinderInterface
{
    /**
     * @param ImportHandlerInterface[] ...$importHandlers
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Import\Handler\ImportHandlerInterface ...$importHandlers)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function find($importEntityType)
    {
    }
}
