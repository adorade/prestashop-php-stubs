<?php

namespace PrestaShop\PrestaShop\Core\Filter;

interface FilterInterface
{
    /**
     * Performs a filter on the subject object.
     *
     * @param mixed $subject subject to filter
     *
     * @return mixed filtered subject
     */
    public function filter($subject);
}
