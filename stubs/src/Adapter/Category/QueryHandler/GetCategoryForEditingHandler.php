<?php

namespace PrestaShop\PrestaShop\Adapter\Category\QueryHandler;

/**
 * Class GetCategoryForEditingHandler.
 */
final class GetCategoryForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\QueryHandler\GetCategoryForEditingHandlerInterface
{
    /**
     * @param ImageTagSourceParserInterface $imageTagSourceParser
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CategoryNotFoundException
     * @throws CannotEditRootCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoryForEditing $query)
    {
    }
}
