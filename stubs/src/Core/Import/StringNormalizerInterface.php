<?php

namespace PrestaShop\PrestaShop\Core\Import;

/**
 * Interface StringNormalizerInterface describes a string normalizer.
 */
interface StringNormalizerInterface
{
    /**
     * Normalizes a string value.
     *
     * @param string $value
     *
     * @return string normalized string
     */
    public function normalize($value);
}
