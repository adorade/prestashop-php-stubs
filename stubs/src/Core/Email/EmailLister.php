<?php

namespace PrestaShop\PrestaShop\Core\Email;

class EmailLister
{
    public function __construct(\PrestaShop\PrestaShop\Core\Foundation\Filesystem\FileSystem $fs)
    {
    }
    /**
     * Return the list of available mails.
     *
     * @param string $dir
     *
     * @return array|null
     */
    public function getAvailableMails($dir)
    {
    }
    /**
     * Give in input getAvailableMails(), will output a human readable and proper string name.
     *
     * @return string
     */
    public function getCleanedMailName($mail_name)
    {
    }
}
