<?php

namespace PrestaShopBundle\Command;

class CheckTranslationFixtures extends \Symfony\Component\Console\Command\Command
{
    protected const DATA_BASE_FILE = 'install-dev/langs/en/data';
    protected const DATA_FIXTURE_FILE = 'install-dev/fixtures/fashion/langs/en/data';
    protected const LANG_KEYS = 'classes/lang/KeysReference/%sLang.php';
    protected const LANG_FILE = 'classes/lang/%sLang.php';
    protected const LANG_CLASS = '%sLangCore';
    protected const OBJECT_FILE = 'classes/%s.php';
    protected function configure()
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
    protected function getBaseContent(): string
    {
    }
}
