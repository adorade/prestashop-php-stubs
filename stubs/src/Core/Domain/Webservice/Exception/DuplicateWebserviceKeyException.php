<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\Exception;

/**
 * Is thrown when duplicate service key is encountered (e.g. when creating new webservice key which already exists)
 */
class DuplicateWebserviceKeyException extends \PrestaShop\PrestaShop\Core\Domain\Webservice\Exception\WebserviceException
{
}
