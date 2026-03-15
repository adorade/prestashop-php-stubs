<?php

namespace PrestaShop\PrestaShop\Adapter\Meta\CommandHandler;

/**
 * Class SaveMetaHandler is responsible for saving meta data.
 *
 * @internal
 */
final class AddMetaHandler implements \PrestaShop\PrestaShop\Core\Domain\Meta\CommandHandler\AddMetaHandlerInterface
{
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param ValidatorInterface $validator
     * @param int $defaultLanguageId
     * @param MetaDataProvider $metaDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \Symfony\Component\Validator\Validator\ValidatorInterface $validator, $defaultLanguageId, \PrestaShop\PrestaShop\Adapter\Meta\MetaDataProvider $metaDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CannotAddMetaException
     * @throws MetaException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Command\AddMetaCommand $command)
    {
    }
}
