<?php

namespace PrestaShopBundle\Install;

abstract class AbstractInstall
{
    /**
     * @var LanguageList
     */
    public $language;
    /**
     * @var \PrestaShopBundle\Translation\Translator
     */
    public $translator;
    /**
     * @var array List of errors
     */
    protected $errors = [];
    /**
     * @var PrestaShopLoggerInterface
     */
    protected $logger;
    public function __construct()
    {
    }
    public function setError($errors)
    {
    }
    public function getErrors()
    {
    }
    public function setTranslator($translator)
    {
    }
    /**
     * @return PrestaShopLoggerInterface;
     */
    public function getLogger(): \PrestaShopLoggerInterface
    {
    }
    /**
     * @param PrestaShopLoggerInterface $logger
     */
    public function setLogger(\PrestaShopLoggerInterface $logger): void
    {
    }
}
