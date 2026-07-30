<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\Repository;

/**
 * Methods to access data source of Currency
 */
class CurrencyRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param CurrencyId $currencyId
     *
     * @throws CoreException
     * @throws CurrencyNotFoundException
     */
    public function assertCurrencyExists(\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId): void
    {
    }
    /**
     * @param CurrencyId $currencyId
     *
     * @return Currency
     *
     * @throws CoreException
     * @throws CurrencyNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId): \Currency
    {
    }
    /**
     * @param CurrencyId $currencyId
     *
     * @return string
     */
    public function getIsoCode(\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId): string
    {
    }
}
