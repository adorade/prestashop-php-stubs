<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column\Type\Common;

final class DateTimeColumn extends \PrestaShop\PrestaShop\Core\Grid\Column\AbstractColumn
{
    /**
     * Default date format.
     * Note the use of non-breaking hyphens (U+2011)
     */
    public const DEFAULT_FORMAT = 'Y‑m‑d H:i:s';
    /**
     * Complete datetime format, without seconds.
     * Note the use of non-breaking hyphens (U+2011)
     */
    public const DATETIME_WITHOUT_SECONDS = 'Y‑m‑d H:i';
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
}
