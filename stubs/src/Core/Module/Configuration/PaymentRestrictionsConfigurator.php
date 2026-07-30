<?php

namespace PrestaShop\PrestaShop\Core\Module\Configuration;

/**
 * Class PaymentRestrictionsConfigurator is responsible for configuring restrictions for payment modules.
 */
final class PaymentRestrictionsConfigurator implements \PrestaShop\PrestaShop\Core\Module\Configuration\PaymentRestrictionsConfiguratorInterface
{
    /**
     * @param Connection $connection
     * @param string $databasePrefix
     * @param int $shopId
     * @param PaymentModuleListProviderInterface $paymentModuleProvider
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $databasePrefix, $shopId, \PrestaShop\PrestaShop\Core\Module\DataProvider\PaymentModuleListProviderInterface $paymentModuleProvider)
    {
    }
    /**
     * @param array $currencyRestrictions
     *
     * @return bool|void
     */
    public function configureCurrencyRestrictions(array $currencyRestrictions)
    {
    }
    /**
     * @param array $countryRestrictions
     *
     * @return bool|void
     */
    public function configureCountryRestrictions(array $countryRestrictions)
    {
    }
    /**
     * @param array $groupRestrictions
     *
     * @return bool|void
     */
    public function configureGroupRestrictions(array $groupRestrictions)
    {
    }
    /**
     * @param array $carrierRestrictions
     *
     * @return bool|void
     */
    public function configureCarrierRestrictions(array $carrierRestrictions)
    {
    }
}
