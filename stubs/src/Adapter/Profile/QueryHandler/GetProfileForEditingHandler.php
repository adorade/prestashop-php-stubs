<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\QueryHandler;

/**
 * Gets Profile for editing using legacy object model
 */
final class GetProfileForEditingHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Profile\QueryHandler\GetProfileForEditingHandlerInterface
{
    /**
     * @param ImageTagSourceParserInterface|null $imageTagSourceParser
     * @param string $imgDir
     * @param string $defaultAvatarUrl
     */
    public function __construct(string $defaultAvatarUrl, \PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser = null, string $imgDir = _PS_PROFILE_IMG_DIR_)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Query\GetProfileForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Profile\QueryResult\EditableProfile
    {
    }
}
