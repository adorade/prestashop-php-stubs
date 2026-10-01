<?php

namespace PrestaShop\PrestaShop\Core\Search;

class SearchPanel implements \PrestaShop\PrestaShop\Core\Search\SearchPanelInterface
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $buttonLabel;
    /**
     * @var string
     */
    protected $link;
    /**
     * @var array
     */
    protected $queryParams;
    public function __construct(string $title, string $buttonLabel, string $link, array $queryParams, ?bool $isExternalLink = true)
    {
    }
    public function getTitle(): string
    {
    }
    public function getButtonLabel(): string
    {
    }
    public function getLink(): string
    {
    }
    public function isExternalLink(): bool
    {
    }
}
