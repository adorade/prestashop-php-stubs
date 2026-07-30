<?php

namespace PrestaShop\PrestaShop\Core\Search;

/**
 * Utility class to extract information from modern controller FQCN.
 */
final class ControllerAction
{
    /**
     * Retrieve the Controller's action and name from a FQCN notation of Symfony controller.
     * This function expects a string like MyNamespace\Foo\FooController::bazAction.
     *
     * @param string $controller
     *
     * @return array
     */
    public static function fromString($controller)
    {
    }
}
