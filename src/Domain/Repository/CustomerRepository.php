<?php
namespace Appliga\Customer\Domain\Repository;

use Appliga\Customer\Domain\Model\Customer;

interface CustomerRepository
{
    public function save(Customer $customer);
    public function find($id);
}