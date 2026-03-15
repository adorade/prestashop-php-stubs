<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate;

/**
 * Class MailTemplateGenerator iterates through the layouts in the provided theme,
 * it uses the Renderer to display them (with the requested LanguageInterface) and
 * then export them as template files in the specified output folder.
 */
class MailTemplateGenerator
{
    use \Psr\Log\LoggerAwareTrait;
    /**
     * @param MailTemplateRendererInterface $renderer
     * @param LoggerInterface|null $logger
     */
    public function __construct(\PrestaShop\PrestaShop\Core\MailTemplate\MailTemplateRendererInterface $renderer, \Psr\Log\LoggerInterface $logger = null)
    {
    }
    /**
     * @param ThemeInterface $theme
     * @param LanguageInterface $language
     * @param string $coreOutputFolder
     * @param string $modulesOutputFolder
     * @param bool $overwriteTemplates [default=false]
     *
     * @throws FileNotFoundException
     */
    public function generateTemplates(\PrestaShop\PrestaShop\Core\MailTemplate\ThemeInterface $theme, \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language, $coreOutputFolder, $modulesOutputFolder, $overwriteTemplates = false)
    {
    }
}
