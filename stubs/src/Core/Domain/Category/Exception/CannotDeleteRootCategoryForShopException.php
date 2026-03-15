<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Exception;

/**
 * Is thrown when trying to delete a root category for current shop context
 */
class CannotDeleteRootCategoryForShopException extends \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryException
{
}
