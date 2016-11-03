<?php
namespace Appliga\Customer\App\Event;

use Appliga\Customer\Domain\Entity\Customer;

class CustomerSignedUp
{
    /**
     * @var Customer
     */
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}