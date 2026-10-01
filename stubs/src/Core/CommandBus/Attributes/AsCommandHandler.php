<?php

namespace PrestaShop\PrestaShop\Core\CommandBus\Attributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
class AsCommandHandler
{
    public function __construct(public $method = 'handle')
    {
    }
}
