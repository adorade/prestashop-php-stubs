<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class CustomerAddressPersisterCore
{
    public function __construct(\Customer $customer, \Cart $cart, $token)
    {
    }
    public function getToken()
    {
    }
    /*
     * Saves or updates an address for the current customer.
     */
    public function save(\Address $address, $token)
    {
    }
    /*
     * Handles deletion of an address for the current customer from my account zone
     * or during checkout.
     */
    public function delete(\Address $address, $token)
    {
    }
}
