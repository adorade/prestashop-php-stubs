<?php

namespace PrestaShop\PrestaShop\Adapter\Category\QueryHandler;

/**
 * Class GetCategoryForEditingHandler.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCategoryForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\QueryHandler\GetCategoryForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser, private readonly \PrestaShop\PrestaShop\Adapter\SEO\RedirectTargetProvider $targetProvider)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CannotEditRootCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoryForEditing $query)
    {
    }
}
