<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Exception;

/**
 * Is thrown when an ISO code which already exists is used to create or update another country
 */
class DuplicateCountryIsoCodeException extends \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryException
{
}
