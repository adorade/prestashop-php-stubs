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
     * @var array List of warnings
     */
    protected $warnings = [];
    /**
     * @var \PrestaShopLoggerInterface|null
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
    public function resetErrors(): void
    {
    }
    public function setWarning($warnings): void
    {
    }
    public function getWarnings(): array
    {
    }
    public function resetWarnings(): void
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
     * @param \PrestaShopLoggerInterface $logger
     */
    public function setLogger(\PrestaShopLoggerInterface $logger): void
    {
    }
}
