<?php

class PaymentOptionsFinderCore extends \PrestaShopBundle\Service\Hook\HookFinder
{
    /**
     * Collects available payment options from three different hooks.
     *
     * @return array An array of available payment options
     *
     * @see HookFinder::find()
     */
    public function find()
    {
    }
    public function findFree()
    {
    }
    public function present($free = \false)
    {
    }
}
