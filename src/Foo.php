<?php

class Foo
{
    /**
     * @var CollaboratorObject
     */
    private $collaboratorObject;

    public function __construct(CollaboratorObject $collaboratorObject)
    {
        $this->collaboratorObject = $collaboratorObject;
    }

    public function test()
    {
        $this->collaboratorObject->method();
    }
}
