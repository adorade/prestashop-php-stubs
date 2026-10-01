<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryHandler;

/**
 * Handles command that gets image settings for editing
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetImageSettingsForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryHandler\GetImageSettingsForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Admin\ImageConfiguration $imageConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Query\GetImageSettingsForEditing $query): \PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryResult\EditableImageSettings
    {
    }
}
