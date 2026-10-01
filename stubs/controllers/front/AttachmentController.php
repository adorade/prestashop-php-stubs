<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class AttachmentControllerCore extends \FrontController
{
    public function postProcess(): void
    {
    }
    /**
     * @see   http://ca2.php.net/manual/en/function.readfile.php#54295
     */
    public function readfileChunked(string $filename, bool $retbytes = \true)
    {
    }
}
