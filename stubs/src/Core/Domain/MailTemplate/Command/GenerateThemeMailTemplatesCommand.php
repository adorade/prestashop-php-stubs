<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\Command;

/**
 * Class GenerateThemeMailsCommand generates email theme's templates for a specific
 * language. If folders are not overridden in the command then MailTemplateGenerator
 * will use the default output folders (in mails folder).
 */
class GenerateThemeMailTemplatesCommand
{
    /**
     * @param string $themeName
     * @param string $language locale, for example: 'en'
     * @param bool $overwriteTemplates
     * @param string $coreMailsFolder Output folder for core emails (if left empty the default mails folder will be used)
     * @param string $modulesMailFolder Output folder for modules emails (if left empty the module mails folder will be used)
     */
    public function __construct($themeName, $language, $overwriteTemplates = false, $coreMailsFolder = '', $modulesMailFolder = '')
    {
    }
    /**
     * @return string
     */
    public function getThemeName()
    {
    }
    /**
     * @return string
     */
    public function getLanguage()
    {
    }
    /**
     * @return bool
     */
    public function overwriteTemplates()
    {
    }
    /**
     * @return string
     */
    public function getCoreMailsFolder()
    {
    }
    /**
     * @return string
     */
    public function getModulesMailFolder()
    {
    }
}
