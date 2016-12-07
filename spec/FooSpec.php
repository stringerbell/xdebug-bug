<?php

namespace spec;

use CollaboratorObject;
use PhpSpec\ObjectBehavior;

class FooSpec extends ObjectBehavior
{
    public function let(CollaboratorObject $collaboratorObject)
    {
        $this->beConstructedWith($collaboratorObject);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Foo');
    }

    public function it_will_segfault(CollaboratorObject $collaboratorObject)
    {
        $collaboratorObject->method()->shouldBeCalled()->willThrow(new \Exception());
        // passing in an argument here seems to be what makes it segfault.
        // it can be any type
        $this->test([]);
    }
}
