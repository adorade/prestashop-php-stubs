<?php

namespace PrestaShop\PrestaShop\Core\Webservice;

/**
 * Interface ServerRequirementsCheckerInterface.
 */
interface ServerRequirementsCheckerInterface
{
    /**
     * Check if server meets requirements to support Webservice feature.
     *
     * @return array Errors if any
     */
    public function checkForErrors();
}
