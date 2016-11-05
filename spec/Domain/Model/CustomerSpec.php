<?php

namespace spec\Appliga\Customer\Domain\Model;

use Appliga\Customer\Domain\Model\Email;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CustomerSpec extends ObjectBehavior
{
    const VALID_NAME = 'John Doe';

    function let(Email $email)
    {
        $this->beConstructedWith(uniqid(),self::VALID_NAME, $email, 'password');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Appliga\Customer\Domain\Model\Customer');
    }

    function it_should_return_name_when_given_valid_name()
    {
        $this->getName()->shouldBe(self::VALID_NAME);
    }


}
