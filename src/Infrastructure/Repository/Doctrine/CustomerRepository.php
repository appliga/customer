<?php
namespace Appliga\Customer\Infrastructure\Repository\Doctrine;

use Appliga\Customer\Domain\Entity\Customer;

class CustomerRepository extends EntityRepository implements \Appliga\Customer\Domain\Repository\CustomerRepository
{

    public function save(Customer $customer)
    {
        
    }

    public function find($id)
    {

    }
}