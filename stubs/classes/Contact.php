<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
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
        'description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isString', 'size' => 4194303],
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
