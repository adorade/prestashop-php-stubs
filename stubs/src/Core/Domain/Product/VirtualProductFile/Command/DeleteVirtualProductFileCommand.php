<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Command;

class DeleteVirtualProductFileCommand
{
    /**
     * @param int $virtualProductFileId
     */
    public function __construct(int $virtualProductFileId)
    {
    }
    /**
     * @return VirtualProductFileId
     */
    public function getVirtualProductFileId(): \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId
    {
    }
}
