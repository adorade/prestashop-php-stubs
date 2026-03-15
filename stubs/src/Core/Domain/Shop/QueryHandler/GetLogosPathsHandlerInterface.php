<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\QueryHandler;

/**
 * Interface for service which handles GetLogos query
 */
interface GetLogosPathsHandlerInterface
{
    /**
     * @param GetLogosPaths $query
     *
     * @return LogosPaths
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shop\Query\GetLogosPaths $query);
}
