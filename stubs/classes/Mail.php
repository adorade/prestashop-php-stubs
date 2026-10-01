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
 * Class MailCore.
 */
class MailCore extends \ObjectModel
{
    public $id;
    /** @var string Recipient */
    public $recipient;
    /** @var string Template */
    public $template;
    /** @var string Subject */
    public $subject;
    /** @var int Language ID */
    public $id_lang;
    /** @var int Timestamp */
    public $date_add;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'mail', 'primary' => 'id_mail', 'fields' => ['recipient' => ['type' => self::TYPE_STRING, 'validate' => 'isEmail', 'copy_post' => \false, 'required' => \true, 'size' => 255], 'template' => ['type' => self::TYPE_STRING, 'validate' => 'isTplName', 'copy_post' => \false, 'required' => \true, 'size' => 62], 'subject' => ['type' => self::TYPE_STRING, 'validate' => 'isMailSubject', 'copy_post' => \false, 'required' => \true, 'size' => 255], 'id_lang' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'copy_post' => \false, 'required' => \true], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => \false, 'required' => \true]]];
    /**
     * Mail content type.
     */
    public const TYPE_HTML = 1;
    public const TYPE_TEXT = 2;
    public const TYPE_BOTH = 3;
    /**
     * Send mail under SMTP server.
     */
    public const METHOD_SMTP = 2;
    /**
     * Disable mail, will return immediately after calling send method.
     */
    public const METHOD_DISABLE = 3;
    /**
     * Send Email.
     *
     * @param int $idLang Language ID of the email (to translate the template)
     * @param string $template Template: the name of template not be a var but a string !
     * @param string $subject Subject of the email
     * @param array $templateVars Template variables for the email
     * @param string|array<string> $to To email
     * @param string|array<string> $toName To name
     * @param string $from From email
     * @param string $fromName To email
     * @param array $fileAttachment array with three parameters (content, mime and name).
     *                              You can use an array of array to attach multiple files
     * @param bool $mode_smtp SMTP mode (deprecated)
     * @param string $templatePath Template path
     * @param bool $die Die after error
     * @param int $idShop Shop ID
     * @param string|array<string>|null $bcc Bcc recipient address. You can use an array of array to send to multiple recipients
     * @param string|null $replyTo Reply-To recipient address
     * @param string|null $replyToName Reply-To recipient name
     *
     * @return bool|int Whether sending was successful. If not at all, false, otherwise amount of recipients succeeded.
     */
    public static function send($idLang, $template, $subject, $templateVars, $to, $toName = \null, $from = \null, $fromName = \null, $fileAttachment = \null, $mode_smtp = \null, $templatePath = \_PS_MAIL_DIR_, $die = \false, $idShop = \null, $bcc = \null, $replyTo = \null, $replyToName = \null)
    {
    }
    protected static function getTemplateBasePath($isoTemplate, $moduleName, $theme)
    {
    }
    /**
     * @param int $idMail Mail ID
     *
     * @return bool Whether removal succeeded
     */
    public static function eraseLog($idMail)
    {
    }
    /**
     * @return bool
     */
    public static function eraseAllLogs()
    {
    }
    /**
     * Send a test email.
     *
     * @param bool $smtpChecked Is SMTP checked?
     * @param string $smtpServer SMTP Server hostname
     * @param string $content Content of the email
     * @param string $subject Subject of the email
     * @param bool $type Deprecated
     * @param string $to To email address
     * @param string $from From email address
     * @param string $smtpLogin SMTP login name
     * @param string $smtpPassword SMTP password
     * @param int $smtpPort SMTP Port
     * @param bool|string $smtpEncryption Encryption type. "off" or false disable encryption.
     *
     * @return bool|string True if succeeded, otherwise the error message
     */
    public static function sendMailTest($smtpChecked, $smtpServer, $content, $subject, $type, $to, $from, $smtpLogin, $smtpPassword, $smtpPort, $smtpEncryption, bool $dkimEnable = \false, string $dkimKey = '', string $dkimDomain = '', string $dkimSelector = '')
    {
    }
    /**
     * This method is used to get the translation for email Object.
     * For an object is forbidden to use htmlentities,
     * we have to return a sentence with accents.
     *
     * @param string $string raw sentence (write directly in file)
     *
     * @return mixed
     */
    public static function l($string, $idLang = \null, \Context $context = \null)
    {
    }
    /* Rewrite of Swift_Message::generateId() without getmypid() */
    protected static function generateId($idstring = \null)
    {
    }
    /**
     * Check if a multibyte character set is used for the data.
     *
     * @param string $data Data
     *
     * @return bool Whether the string uses a multibyte character set
     */
    public static function isMultibyte($data)
    {
    }
    /**
     * MIME encode the string.
     *
     * @param string $string The string to encode
     * @param string $charset The character set to use
     * @param string $newline The newline character(s)
     *
     * @return mixed|string MIME encoded string
     */
    public static function mimeEncode($string, $charset = 'UTF-8', $newline = "\r\n")
    {
    }
    /**
     * Automatically convert email to Punycode.
     *
     * Try to use INTL_IDNA_VARIANT_UTS46 only if defined, else use INTL_IDNA_VARIANT_2003
     * See https://wiki.php.net/rfc/deprecate-and-remove-intl_idna_variant_2003
     *
     * @param string $to Email address
     *
     * @return string
     */
    public static function toPunycode($to)
    {
    }
    /**
     * Generic function to dieOrLog with translations.
     *
     * @param bool $die Should die
     * @param string $message Message
     * @param array $templates Templates list
     * @param string $domain Translation domain
     */
    protected static function dieOrLog($die, $message, $templates = [], $domain = 'Admin.Advparameters.Notification')
    {
    }
}
