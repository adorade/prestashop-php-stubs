<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Class AbstractEditCategoryHandler.
 */
abstract class AbstractEditCategoryHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Image\Uploader\CategoryImageUploader $categoryImageUploader, private readonly \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository)
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException
     */
    protected function fillWithRedirectOption(\Category $category, \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\RedirectOption $redirectOption): void
    {
    }
}
