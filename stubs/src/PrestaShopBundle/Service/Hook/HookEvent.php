<?php

namespace PrestaShopBundle\Service\Hook;

/**
 * HookEvent is used in HookDispatcher.
 *
 * A HookEvent can contains parameters to give to the listeners through getHookParameters.
 */
class HookEvent extends \Symfony\Component\EventDispatcher\Event
{
    /**
     * @param array $contextParameters
     * @param array $hookParameters
     */
    public function __construct(array $contextParameters = null, array $hookParameters = null)
    {
    }
    /**
     * Sets the Hook parameters.
     *
     * @param array $parameters
     *
     * @return self
     */
    public function setHookParameters($parameters)
    {
    }
    /**
     * Returns Hook parameters and context parameters
     *
     * @return array
     */
    public function getHookParameters()
    {
    }
}
