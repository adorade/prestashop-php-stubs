<?php

/**
 * Class PhpEncryption engine for openSSL 1.0.1+.
 */
class PhpEncryptionEngineCore
{
    protected $key;
    /**
     * PhpEncryptionCore constructor.
     *
     * @param string $hexString A string that only contains hexadecimal characters
     *                          Bother upper and lower case are allowed
     */
    public function __construct($hexString)
    {
    }
    /**
     * Encrypt the plaintext.
     *
     * @param string $plaintext Plaintext
     *
     * @return string Cipher text
     */
    public function encrypt($plaintext)
    {
    }
    /**
     * Decrypt the cipher text.
     *
     * @param string $cipherText Cipher text
     *
     * @return bool|string Plaintext
     *                     `false` if unable to decrypt
     *
     * @throws Exception
     */
    public function decrypt($cipherText)
    {
    }
    /**
     * @param string $header
     * @param string $bytes
     *
     * @return string
     *
     * @throws \Defuse\Crypto\Exception\EnvironmentIsBrokenException
     */
    public static function saveBytesToChecksummedAsciiSafeString($header, $bytes)
    {
    }
    /**
     * @return string
     */
    public static function createNewRandomKey()
    {
    }
    /**
     * @param string $hexString
     *
     * @return Key
     */
    public static function loadFromAsciiSafeString($hexString)
    {
    }
    /**
     * @return string
     *
     * @throws Exception
     */
    public static function randomCompat()
    {
    }
    /**
     * @param string $buf
     *
     * @return string
     */
    public static function saveToAsciiSafeString($buf)
    {
    }
}
