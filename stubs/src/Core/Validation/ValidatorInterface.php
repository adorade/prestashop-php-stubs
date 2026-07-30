<?php

namespace PrestaShop\PrestaShop\Core\Validation;

interface ValidatorInterface
{
    /**
     * Check if HTML is clean.
     *
     * @param string $html
     * @param array $options
     *
     * @return bool
     */
    public function isCleanHtml($html, array $options = []);
    /**
     * Check if Module name is valid.
     *
     * @param string $name
     *
     * @return bool
     */
    public function isModuleName($name);
}
