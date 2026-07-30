<?php

namespace PrestaShop\PrestaShop\Core\Image\Exception;

/**
 * Class AvifUnavailableException used when AVIF seems to be available, but in fact, not.
 *
 * @see https://stackoverflow.com/questions/71739530/php-8-1-imageavif-avif-image-support-has-been-disabled
 */
class AvifUnavailableException extends \Exception
{
}
