<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * Class GridExtension is responsible for providing grid helpers functions.
 *
 * - column_content(column, record, grid): renders column content based on column type.
 * - column_header(column, grid): renders column header based on column type.
 */
class GridExtension extends \Twig\Extension\AbstractExtension
{
    public const BASE_COLUMN_CONTENT_TEMPLATE_PATH = '@PrestaShop/Admin/Common/Grid/Columns/Content';
    public const BASE_COLUMN_HEADER_TEMPLATE_PATH = '@PrestaShop/Admin/Common/Grid/Columns/Header/Content';
    /**
     * @param Environment $twig
     * @param AdapterInterface $cache
     */
    public function __construct(\Twig\Environment $twig, \Symfony\Component\Cache\Adapter\AdapterInterface $cache)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getTests()
    {
    }
    /**
     * Render column content.
     *
     * @param array $record
     * @param array $column
     * @param array $grid
     *
     * @return string
     *
     * @throws RuntimeException when template cannot be found for column
     */
    public function renderColumnContent(array $record, array $column, array $grid)
    {
    }
    /**
     * Render column header.
     *
     * @param array $column
     * @param array $grid
     *
     * @return string
     */
    public function renderColumnHeader(array $column, array $grid)
    {
    }
    /**
     * @param array $grid
     *
     * @return bool
     */
    public function isOrderingColumn(array $grid)
    {
    }
}
