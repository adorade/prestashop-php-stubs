<?php

namespace PrestaShop\PrestaShop\Core\Domain\Meta\Query;

/**
 * Class GetMetaForEditing is responsible for providing required data for GetMetaForEditingHandler to return meta data.
 */
class GetMetaForEditing
{
    /**
     * GetMetaForEditing constructor.
     *
     * @param int $metaId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaException
     */
    public function __construct($metaId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Meta\ValueObject\MetaId
     */
    public function getMetaId()
    {
    }
}
