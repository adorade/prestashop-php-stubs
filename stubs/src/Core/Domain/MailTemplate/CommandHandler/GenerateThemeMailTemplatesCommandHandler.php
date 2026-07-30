<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\CommandHandler;

/**
 * Class GenerateThemeMailTemplatesCommandHandler generates email templates with parameters provided
 * by GenerateThemeMailTemplatesCommand. If no output folders are defined by the command its output
 * folders are the default ones.
 */
class GenerateThemeMailTemplatesCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\MailTemplate\CommandHandler\GenerateThemeMailTemplatesCommandHandlerInterface
{
    /**
     * @param LanguageRepositoryInterface $languageRepository
     * @param ThemeCatalogInterface $themeCatalog
     * @param MailTemplateGenerator $generator
     * @param string $defaultCoreMailsFolder
     * @param string $defaultModulesMailFolder
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $languageRepository, \PrestaShop\PrestaShop\Core\MailTemplate\ThemeCatalogInterface $themeCatalog, \PrestaShop\PrestaShop\Core\MailTemplate\MailTemplateGenerator $generator, $defaultCoreMailsFolder, $defaultModulesMailFolder)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\MailTemplate\Command\GenerateThemeMailTemplatesCommand $command)
    {
    }
}
