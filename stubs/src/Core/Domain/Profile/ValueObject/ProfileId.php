<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\ValueObject;

class ProfileId
{
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Profile\Exception\ProfileConstraintException
     */
    public function __construct(int $profileId)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}
