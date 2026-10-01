<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\QueryHandler;

/**
 * Gets Profile for editing using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetProfileForEditingHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Profile\QueryHandler\GetProfileForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser
     * @param string $imgDir
     * @param string $defaultAvatarUrl
     */
    public function __construct(string $defaultAvatarUrl, \PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser, string $imgDir = _PS_PROFILE_IMG_DIR_)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Query\GetProfileForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Profile\QueryResult\EditableProfile
    {
    }
}
