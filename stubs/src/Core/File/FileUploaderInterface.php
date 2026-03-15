<?php

namespace PrestaShop\PrestaShop\Core\File;

interface FileUploaderInterface
{
    /**
     * Upload a file
     *
     * @return array{id: string, file_name: string, mime_type: string}
     */
    public function upload($file): array;
}
