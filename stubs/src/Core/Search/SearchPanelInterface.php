<?php

namespace PrestaShop\PrestaShop\Core\Search;

interface SearchPanelInterface
{
    public function getTitle(): string;
    public function getButtonLabel(): string;
    public function getLink(): string;
    public function isExternalLink(): bool;
}
