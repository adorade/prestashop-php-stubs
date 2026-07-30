<?php

namespace PrestaShop\PrestaShop\Adapter\File\Validator;

/**
 * Validates virtual product file (the actual file itself & not the domain model)
 */
class VirtualProductFileValidator
{
    /**
     * @param string $maxFileSizeInMegabytes
     */
    public function __construct(string $maxFileSizeInMegabytes)
    {
    }
    /**
     * @param string $filePath
     *
     * @throws InvalidFileException
     */
    public function validate(string $filePath): void
    {
    }
}
