<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\Query;

/**
 * Class GetAliasForEditing is responsible for getting the data related with alias entity.
 */
class GetAliasForEditing
{
    public function __construct(int $aliasId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\AliasId
     */
    public function getAliasId(): \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\AliasId
    {
    }
}
