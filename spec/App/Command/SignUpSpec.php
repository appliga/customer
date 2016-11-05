<?php

namespace spec\Appliga\Customer\App\Command;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SignUpSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Appliga\Customer\App\Command\SignUp');
    }
}
