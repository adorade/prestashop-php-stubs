<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class AddressChecksumCore.
 */
class AddressChecksumCore implements \ChecksumInterface
{
    public const SEPARATOR = '_';
    /**
     * Generate a checksum.
     *
     * @param Address $address
     *
     * @return string SHA1 checksum for the Address
     */
    public function generateChecksum($address)
    {
    }
}
