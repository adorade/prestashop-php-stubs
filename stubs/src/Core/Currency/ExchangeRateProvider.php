<?php

namespace PrestaShop\PrestaShop\Core\Currency;

/**
 * Retrieves the exchange rate of a currency (based on the default currency). It uses a circuit breaker
 * to avoid being blocked in case of network problems and it saves each of its request in a cache to be
 * able to have a fallback response.
 */
class ExchangeRateProvider
{
    /**
     * This url was set in the _PS_CURRENCY_FEED_URL_ const but it is not accessible in every
     * context because it is weirdly defined in defines_uri.inc.php So it is safer to define
     * it properly here.
     */
    public const CURRENCY_FEED_URL = 'http://api.prestashop.com/xml/currencies.xml';
    public const CLOSED_ALLOWED_FAILURES = 3;
    public const CLOSED_TIMEOUT_SECONDS = 1;
    public const OPEN_ALLOWED_FAILURES = 3;
    public const OPEN_TIMEOUT_SECONDS = 2;
    public const OPEN_THRESHOLD_SECONDS = 3600;
    // 1 hour
    public const CACHE_KEY_XML = 'currency_feed.xml';
    /**
     * @param string $currencyFeedUrl
     * @param string $defaultCurrencyIsoCode
     * @param CircuitBreakerInterface $remoteServiceProvider
     * @param CacheInterface $cache
     */
    public function __construct($currencyFeedUrl, $defaultCurrencyIsoCode, \PrestaShop\CircuitBreaker\Contract\CircuitBreakerInterface $remoteServiceProvider, \Symfony\Component\Cache\Adapter\AdapterInterface $cache)
    {
    }
    /**
     * @param string $currencyIsoCode
     *
     * @return DecimalNumber
     *
     * @throws CurrencyFeedException
     */
    public function getExchangeRate($currencyIsoCode)
    {
    }
}
