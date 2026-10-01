<?php

namespace PrestaShop\PrestaShop\Adapter\Meta\CommandHandler;

/**
 * Class EditMetaHandler is responsible for editing meta data.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditMetaHandler implements \PrestaShop\PrestaShop\Core\Domain\Meta\CommandHandler\EditMetaHandlerInterface
{
    /**
     * @param \Symfony\Component\Validator\Validator\ValidatorInterface $validator
     * @param \PrestaShop\PrestaShop\Adapter\Meta\MetaDataProvider $metaDataProvider
     */
    public function __construct(\Symfony\Component\Validator\Validator\ValidatorInterface $validator, \PrestaShop\PrestaShop\Adapter\Meta\MetaDataProvider $metaDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Command\EditMetaCommand $command)
    {
    }
}
