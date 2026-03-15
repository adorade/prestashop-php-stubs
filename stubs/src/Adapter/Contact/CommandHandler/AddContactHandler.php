<?php

namespace PrestaShop\PrestaShop\Adapter\Contact\CommandHandler;

/**
 * Class AddContactHandler is used for adding contact data.
 *
 * @internal
 */
final class AddContactHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Contact\CommandHandler\AddContactHandlerInterface
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
     * @throws CannotAddContactException
     * @throws ContactException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Contact\Command\AddContactCommand $command)
    {
    }
}
