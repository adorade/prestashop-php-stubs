<?php

namespace PrestaShop\PrestaShop\Core\Translation\Exception;

/**
 * This exception is thrown when we use a translation type which is not expected.
 * A translation type represents a part of the application logic (modules, themes, backoffice, frontoffice ...).
 * The available types are listed in TranslationCatalogueBuilder::ALLOWED_TYPES.
 */
class UnexpectedTranslationTypeException extends \Exception
{
}
