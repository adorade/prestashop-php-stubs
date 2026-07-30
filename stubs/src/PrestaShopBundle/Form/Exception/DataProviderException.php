<?php

namespace PrestaShopBundle\Form\Exception;

class DataProviderException extends \PrestaShop\PrestaShop\Core\Domain\Exception\DomainException
{
    public function __construct($message = '', $code = 0, \Throwable $previous = null, ?\PrestaShopBundle\Form\Exception\InvalidConfigurationDataErrorCollection $InvalidConfigurationDataErrors = null)
    {
    }
    /**
     * @return InvalidConfigurationDataErrorCollection
     */
    public function getInvalidConfigurationDataErrors(): \PrestaShopBundle\Form\Exception\InvalidConfigurationDataErrorCollection
    {
    }
}
