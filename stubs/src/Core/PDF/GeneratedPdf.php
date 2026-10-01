<?php

namespace PrestaShop\PrestaShop\Core\PDF;

/**
 * Contains generated PDF content and its download filename.
 */
final class GeneratedPdf
{
    /**
     * @param string $content
     * @param string $fileName
     */
    public function __construct(private readonly string $content, private readonly string $fileName)
    {
    }
    public function getContent(): string
    {
    }
    public function getFileName(): string
    {
    }
}
