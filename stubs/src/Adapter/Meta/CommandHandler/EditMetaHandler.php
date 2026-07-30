<?php

namespace PrestaShop\PrestaShop\Adapter\Meta\CommandHandler;

/**
 * Class EditMetaHandler is responsible for editing meta data.
 *
 * @internal
 */
final class EditMetaHandler implements \PrestaShop\PrestaShop\Core\Domain\Meta\CommandHandler\EditMetaHandlerInterface
{
    /**
     * @param ValidatorInterface $validator
     * @param MetaDataProvider $metaDataProvider
     */
    public function __construct(\Symfony\Component\Validator\Validator\ValidatorInterface $validator, \PrestaShop\PrestaShop\Adapter\Meta\MetaDataProvider $metaDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws MetaException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Command\EditMetaCommand $command)
    {
    }
}
