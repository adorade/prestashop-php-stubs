<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * This service is used to help prepare multiple context builders, this is convenient
 * for install processes or in tests, but it shouldn't be used in other use cases.
 *
 * Usually the context builders are initialized via request listeners, this service allows
 * preparing the builder in advance even if we are not sure if they will be used.
 *
 * Since Context services are build lazily by these builders (which are factories) it's safer
 * to anticipate preparing them in edge cases.
 *
 * @internal
 */
class ContextBuilderPreparer
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContextBuilder $languageContextBuilder)
    {
    }
    public function prepareFromLegacyContext(\Context $context): void
    {
    }
    public function prepareLanguageId(int $languageId): void
    {
    }
}
