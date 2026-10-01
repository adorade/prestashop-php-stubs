<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute;

interface AttributeFileUploaderInterface
{
    /**
     * @param string $filePath
     * @param int $id
     */
    public function upload(string $filePath, int $id): void;
}
