<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class CartChecksumCore implements \ChecksumInterface
{
    public $addressChecksum = \null;
    public function __construct(\AddressChecksum $addressChecksum)
    {
    }
    /**
     * @param Cart $cart
     *
     * @return string cart SHA1
     */
    public function generateChecksum($cart)
    {
    }
}
