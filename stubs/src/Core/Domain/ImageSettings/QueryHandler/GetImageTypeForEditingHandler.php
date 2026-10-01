<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryHandler;

/**
 * Handles command that gets image type for editing
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetImageTypeForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryHandler\GetImageTypeForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ImageTypeRepository $imageTypeRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Query\GetImageTypeForEditing $query): \PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryResult\EditableImageType
    {
    }
}
