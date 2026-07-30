<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Employee\QueryHandler;

/**
 * Handles command that gets employee for editing.
 */
final class GetEmployeeForEditingHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Employee\QueryHandler\GetEmployeeForEditingHandlerInterface
{
    /**
     * @param ImageTagSourceParserInterface|null $imageTagSourceParser
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Query\GetEmployeeForEditing $query)
    {
    }
}
