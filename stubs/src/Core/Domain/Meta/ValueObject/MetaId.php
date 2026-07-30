<?php

namespace PrestaShop\PrestaShop\Core\Domain\Meta\ValueObject;

/**
 * Class MetaId is responsible for providing id of meta entity.
 */
class MetaId
{
    /**
     * @param int $metaId
     *
     * @throws MetaException
     */
    public function __construct($metaId)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
    /**
     * @param int $metaId
     *
     * @throws MetaException
     */
    public function assertIsIntAndLargerThanZero($metaId)
    {
    }
}
