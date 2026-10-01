<?php

namespace PrestaShopBundle\Command;

class CheckTranslationDuplicatesCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(\Symfony\Component\Translation\TranslatorBagInterface $translator)
    {
    }
    protected function configure()
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
    /**
     * We consider strings as equals if they have the same value after params cleanup.
     *
     * @param string $message1
     * @param string $message2
     *
     * @return bool
     */
    protected function check($message1, $message2)
    {
    }
    /**
     * This function replaces all parameters with a ~ in a string to translate.
     * This allow the algorithm to check if the strings are the same once the parameters made generic
     * i.e: Error when disabling module %module% ==> Error when disabling module ~.
     *
     * @param string $message
     *
     * @return string with replaced parameters
     */
    protected function removeParams($message)
    {
    }
}
