<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Provides regex validation by type
 */
class TypedRegex extends \Symfony\Component\Validator\Constraint
{
    /**
     * Available types
     */
    public const TYPE_NAME = 'name';
    public const TYPE_CATALOG_NAME = 'catalog_name';
    public const TYPE_GENERIC_NAME = 'generic_name';
    public const TYPE_CITY_NAME = 'city_name';
    public const TYPE_ADDRESS = 'address';
    public const TYPE_POST_CODE = 'post_code';
    public const TYPE_PHONE_NUMBER = 'phone_number';
    public const TYPE_MESSAGE = 'message';
    public const TYPE_LANGUAGE_ISO_CODE = 'language_iso_code';
    public const TYPE_LANGUAGE_CODE = 'language_code';
    public const TYPE_CURRENCY_ISO_CODE = 'currency_iso_code';
    public const TYPE_FILE_NAME = 'file_name';
    public const TYPE_DNI_LITE = 'dni_lite';
    public const TYPE_UPC = 'upc';
    public const TYPE_EAN_13 = 'ean_13';
    public const TYPE_ISBN = 'isbn';
    public const TYPE_REFERENCE = 'reference';
    public const TYPE_URL = 'url';
    public const TYPE_MODULE_NAME = 'module_name';
    public const TYPE_STATE_ISO_CODE = 'state_iso_code';
    public const TYPE_WEBSERVICE_KEY = 'webservice_key';
    public const TYPE_LINK_REWRITE = 'link_rewrite';
    public const TYPE_ZIP_CODE_FORMAT = 'zip_code_format';
    /**
     * @var string
     */
    public $message = '%s is invalid';
    /**
     * @var string
     */
    public $type;
    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getDefaultOption()
    {
    }
}
