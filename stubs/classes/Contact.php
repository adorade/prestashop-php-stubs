<?php

/**
 * Class ContactCore.
 */
class ContactCore extends \ObjectModel
{
    public $id;
    /** @var string|array<int, string> Name */
    public $name;
    /** @var string E-mail */
    public $email;
    /** @var string|array<int, string> Detailed description */
    public $description;
    /** @var bool */
    public $customer_service;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'contact', 'primary' => 'id_contact', 'multilang' => \true, 'fields' => [
        'email' => ['type' => self::TYPE_STRING, 'validate' => 'isEmail', 'size' => 255],
        'customer_service' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 255],
        'description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isString', 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4],
    ]];
    /**
     * Return available contacts.
     *
     * @param int $idLang Language ID
     *
     * @return array Contacts
     */
    public static function getContacts($idLang)
    {
    }
    /**
     * Return available categories contacts.
     *
     * @return array Contacts
     */
    public static function getCategoriesContacts()
    {
    }
}
