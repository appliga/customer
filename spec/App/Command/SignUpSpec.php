<?php

namespace spec\Appliga\Customer\App\Command;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SignUpSpec extends ObjectBehavior
{
    const VALID_NAME = 'John Doe';
    const VALID_EMAIL = 'john.doe@gmail.com';
    const VALID_PASSWORD = 'password';

    function let()
    {
        $this->beConstructedWith(self::VALID_NAME, self::VALID_EMAIL, self::VALID_PASSWORD);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Appliga\Customer\App\Command\SignUp');
    }
}
