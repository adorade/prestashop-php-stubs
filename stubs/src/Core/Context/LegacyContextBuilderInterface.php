<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * This interface is used to build the legacy context for backward compatibility. The legacy context is being
 * replaced by modern split Symfony services that offer more stability and control. But we still need to maintain
 * some backward compatibility for all parts of code that are not yet migrated to new contexts, or for old modules
 * that still rely a lot on the legacy Context.
 */
interface LegacyContextBuilderInterface
{
    public function buildLegacyContext(): void;
}
