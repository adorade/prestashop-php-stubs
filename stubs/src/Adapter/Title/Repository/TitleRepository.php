<?php

namespace PrestaShop\PrestaShop\Adapter\Title\Repository;

/**
 * Provides access to Title data source
 */
class TitleRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Title\Validate\TitleValidator $titleValidator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Title\Validate\TitleValidator $titleValidator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId $titleId
     *
     * @return \Gender
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId $titleId): \Gender
    {
    }
    /**
     * @param \Gender $title
     * @param int $errorCode
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId
     */
    public function add(\Gender $title, int $errorCode = 0): \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId
    {
    }
    /**
     * @param \Gender $title
     * @param array $propertiesToUpdate
     * @param int $errorCode
     */
    public function partialUpdate(\Gender $title, array $propertiesToUpdate, int $errorCode): void
    {
    }
    /**
     * @param \Gender $title
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleNotFoundException
     */
    public function delete(\Gender $title): void
    {
    }
}
