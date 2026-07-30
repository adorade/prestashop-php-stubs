<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class ChartCore
{
    /** @var int */
    protected static $poolId = 0;
    protected $width = 600;
    protected $height = 300;
    /* Time mode */
    protected $timeMode = \false;
    protected $from;
    protected $to;
    protected $format;
    protected $granularity;
    protected $curves = [];
    /** @prototype void public static function init(void) */
    public static function init()
    {
    }
    /** @prototype void public function __construct() */
    public function __construct()
    {
    }
    /** @prototype void public function setSize(int $width, int $height) */
    public function setSize($width, $height)
    {
    }
    /** @prototype void public function setTimeMode($from, $to, $granularity) */
    public function setTimeMode($from, $to, $granularity)
    {
    }
    public function getCurve($i)
    {
    }
    /** @prototype void public function display() */
    public function display()
    {
    }
    public function fetch()
    {
    }
}
