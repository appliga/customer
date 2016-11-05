<?php

namespace spec\Appliga\Customer\Domain\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmailSpec extends ObjectBehavior
{
    const VALID_EMAIL_ADDRESS = 'brzoski.pawel@gmail.com';

    function let()
    {
        $this->beConstructedWith(self::VALID_EMAIL_ADDRESS);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Appliga\Customer\Domain\Model\Email');
    }

    function it_should_throw_exception_when_given_email_address_is_empty()
    {
        $this->shouldThrow('\InvalidArgumentException')->during('__construct',array(''));
    }

    function it_should_throw_exception_when_given_invalid_email_address()
    {
        $this->shouldThrow('\InvalidArgumentException')->during('__construct',array('brzoski.pawel.gmail.com'));
    }

    function it_should_return_address_when_given_valid_email_address()
    {
        $this->getAddress()->shouldBe(self::VALID_EMAIL_ADDRESS);
    }
}