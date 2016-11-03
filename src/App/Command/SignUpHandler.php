<?php
namespace Appliga\Customer\App\Command;

use Appliga\Customer\Domain\Entity\Customer;
use Appliga\Customer\Domain\Repository\CustomerRepository;
use Appliga\General\Domain\ValueObject\Email;

class SignUpHandler
{
    /**
     * @var CustomerRepository
     */
    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function handle(SignUp $command)
    {
        $customer = new Customer(
            $command->getId(),
            $command->getName(),
            new Email($command->getEmail()),
            $command->getPassword()
        );

        $this->customerRepository->save($customer);
    }
}