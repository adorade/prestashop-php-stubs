<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\Exception;

/**
 * Thrown when trying to use a multishop feature on an entity that has no multishop feature
 * (no association and no multilang_shop feature).
 */
class ShopDefinitionNotFound extends \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
{
}
