<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState;

interface OrderStateFileUploaderInterface
{
    /**
     * @param string $filePath
     * @param int $id
     * @param int $fileSize
     */
    public function upload(string $filePath, int $id, int $fileSize): void;
}
