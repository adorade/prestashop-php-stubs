<?php

namespace PrestaShop\PrestaShop\Adapter\Contact\CommandHandler;

/**
 * Class AddContactHandler is used for adding contact data.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class AddContactHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Contact\CommandHandler\AddContactHandlerInterface
{
    /**
     * @param \Symfony\Component\Validator\Validator\ValidatorInterface $validator
     */
    public function __construct(\Symfony\Component\Validator\Validator\ValidatorInterface $validator)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Contact\Exception\CannotAddContactException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Contact\Exception\ContactException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Contact\Command\AddContactCommand $command)
    {
    }
}
