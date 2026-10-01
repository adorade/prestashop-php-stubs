<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\QueryHandler;

/**
 * Responsible for providing header, email, invoice and favicon logo paths for specific shop context.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetLogosPathsHandler implements \PrestaShop\PrestaShop\Core\Domain\Shop\QueryHandler\GetLogosPathsHandlerInterface
{
    /**
     * @param string $imageBaseUrl
     * @param string $imageDirectory
     */
    public function __construct($imageBaseUrl, $imageDirectory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shop\Query\GetLogosPaths $query)
    {
    }
}
