<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class HelperViewCore extends \Helper
{
    public $id;
    public $toolbar = \true;
    public $table;
    public $token;
    /** @var string|null If not null, a title will be added on that list */
    public $title = \null;
    public function __construct()
    {
    }
    public function generateView()
    {
    }
}
