<?php

namespace spec\Appliga\Customer\Domain\Model;

use Appliga\Customer\Domain\Model\Email;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CustomerSpec extends ObjectBehavior
{
    const ID = 'eb50d5f9-cfab-4fa5-aa61-263f1876aa63';
    const VALID_NAME = 'John Doe';
    const VALID_PASSWORD = 'password';

    function let(Email $email)
    {
        $this->beConstructedWith(self::ID,self::VALID_NAME, $email, 'password');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Appliga\Customer\Domain\Model\Customer');
    }

    function it_should_throw_exception_when_given_empty_name(Email $email)
    {
        $this->shouldThrow('\InvalidArgumentException')->during('__construct', array(uniqid(),'',$email, self::VALID_PASSWORD));
    }

    function it_should_throw_exception_when_given_name_is_null(Email $email)
    {
        $this->shouldThrow('\InvalidArgumentException')->during('__construct', array(uniqid(),null,$email, self::VALID_PASSWORD));
    }

    function it_should_throw_exception_when_given_empty_password(Email $email)
    {
        $this->shouldThrow('\InvalidArgumentException')->during('__construct', array(uniqid(),self::VALID_NAME,$email, ''));
    }

    function it_should_throw_exception_when_given_password_is_null(Email $email)
    {
        $this->shouldThrow('\InvalidArgumentException')->during('__construct', array(uniqid(),self::VALID_NAME,$email, null));
    }

    function it_should_return_id_when_given_id()
    {
        $this->getId()->shouldBe(self::ID);
    }

    function it_should_return_name_when_given_valid_name()
    {
        $this->getName()->shouldBe(self::VALID_NAME);
    }

    function it_should_return_email_object_when_given_valid_email()
    {
        $this->getEmail()->shouldBeAnInstanceOf('Appliga\Customer\Domain\Model\Email');
    }

    function it_should_return_name_when_given_valid_password()
    {
        $this->getPassword()->shouldBe(self::VALID_PASSWORD);
    }


}
