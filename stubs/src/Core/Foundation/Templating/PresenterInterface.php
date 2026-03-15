<?php

namespace PrestaShop\PrestaShop\Core\Foundation\Templating;

interface PresenterInterface
{
    public function present($object);
    // must return an array
}
