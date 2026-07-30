<?php

namespace PrestaShop\PrestaShop\Adapter\Contact\CommandHandler;

/**
 * Class EditContactHandler is responsible for editing contact data.
 *
 * @internal
 */
final class EditContactHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Contact\CommandHandler\EditContactHandlerInterface
{
    /**
     * @param ValidatorInterface $validator
     */
    public function __construct(\Symfony\Component\Validator\Validator\ValidatorInterface $validator)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws ContactException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Contact\Command\EditContactCommand $command)
    {
    }
}
