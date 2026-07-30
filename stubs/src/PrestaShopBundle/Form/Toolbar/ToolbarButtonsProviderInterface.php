<?php

namespace PrestaShopBundle\Form\Toolbar;

/**
 * This interface is used for form relaying on ButtonCollectionType component, you can handle the options expected
 * by this component via this interface thus allowing you to extract this logic in a dedicated service, for more
 * information about the expected format @see ButtonCollectionType
 */
interface ToolbarButtonsProviderInterface
{
    public function getToolbarButtonsOptions(array $parameters): array;
}
