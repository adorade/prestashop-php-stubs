<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Reusable methods for validating legacy object models
 */
abstract class AbstractObjectModelValidator
{
    /**
     * @param ObjectModel $objectModel
     * @param string $propertyName
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @throws CoreException
     */
    protected function validateObjectModelProperty(\ObjectModel $objectModel, string $propertyName, string $exceptionClass, int $errorCode = 0): void
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param string $propertyName
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @throws CoreException
     */
    protected function validateObjectModelLocalizedProperty(\ObjectModel $objectModel, string $propertyName, string $exceptionClass, int $errorCode = 0)
    {
    }
}
