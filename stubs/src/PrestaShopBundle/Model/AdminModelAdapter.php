<?php

namespace PrestaShopBundle\Model;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to map the form data to the posted object.
 *
 * For this parent class, only hook sub fields are handled.
 */
class AdminModelAdapter
{
    /**
     * modelMapper
     * Map form data to object model.
     *
     * This parent method will return only hook sub array.
     *
     * @return array Transformed form data to model attempt
     */
    public function getHookData()
    {
    }
}
