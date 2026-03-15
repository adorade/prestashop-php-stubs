<?php

namespace PrestaShop\PrestaShop\Core\Exception;

/**
 * Class TranslatableCoreException.
 */
class TranslatableCoreException extends \PrestaShop\PrestaShop\Core\Exception\CoreException
{
    /**
     * @param string $key
     * @param string $domain
     * @param array $parameters
     * @param int $code
     * @param Throwable|Exception|null $previous
     */
    public function __construct($key, $domain, $parameters = [], $code = 0, $previous = null)
    {
    }
    /**
     * @return string
     */
    public function getKey()
    {
    }
    /**
     * @param string $key
     *
     * @return $this
     */
    public function setKey($key)
    {
    }
    /**
     * @return string
     */
    public function getDomain()
    {
    }
    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
    }
    /**
     * @return array
     */
    public function getParameters()
    {
    }
    /**
     * @param array $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters)
    {
    }
    /**
     * @return array
     */
    public function toArray()
    {
    }
}
