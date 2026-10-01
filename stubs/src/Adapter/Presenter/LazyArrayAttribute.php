<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter;

#[\Attribute]
class LazyArrayAttribute
{
    public function __construct(public bool $arrayAccess = false, public ?string $indexName = null, public ?bool $isRewritable = null)
    {
    }
}
