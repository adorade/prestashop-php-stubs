<?php

namespace PrestaShop\PrestaShop\Core\Validation;

/**
 * Class Validator is responsible for validating data.
 */
final class Validator implements \PrestaShop\PrestaShop\Core\Validation\ValidatorInterface
{
    /**
     * @param Validate $validate
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Validate $validate)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isCleanHtml($html, array $options = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isModuleName($name)
    {
    }
}
