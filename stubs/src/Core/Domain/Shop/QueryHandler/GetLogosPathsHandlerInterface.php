<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\QueryHandler;

/**
 * Interface for service which handles GetLogos query
 */
interface GetLogosPathsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\Query\GetLogosPaths $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\QueryResult\LogosPaths
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shop\Query\GetLogosPaths $query);
}
