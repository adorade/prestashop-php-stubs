<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataFormatter;

abstract class AbstractFormDataFormatter
{
    /**
     * @var string
     */
    protected $modifyAllNamePrefix;
    public function __construct(string $modifyAllNamePrefix = '')
    {
    }
    protected function formatByPath(array $formData, array $pathAssociations): array
    {
    }
}
