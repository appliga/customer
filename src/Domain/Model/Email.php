<?php

namespace Appliga\Customer\Domain\Model;

class Email
{
    protected $address;

    /**
     * Email constructor.
     * @param $address
     */
    public function __construct($address)
    {
        if(!filter_var($address, FILTER_VALIDATE_EMAIL)){
            throw new \InvalidArgumentException('Invalid email address');
        }

        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }
}
