<?php

namespace PrestaShopBundle\Command;

/**
 * Shared interactive password prompt for the prestashop:employee:* CLI commands.
 *
 * Asks for a password twice (hidden), validates both inputs and either returns
 * the confirmed value or throws a RuntimeException describing precisely why
 * the input was rejected. Throwing — rather than returning null — keeps the
 * "why" distinguishable when more validation rules are added later (length,
 * policy, …).
 */
trait PasswordPromptTrait
{
    /**
     * @throws \RuntimeException when the password is empty or the two prompts do not match
     */
    private function askPasswordTwice(\Symfony\Component\Console\Style\SymfonyStyle $io, string $label = 'Password'): string
    {
    }
    private function askHidden(\Symfony\Component\Console\Style\SymfonyStyle $io, string $label): string
    {
    }
}
