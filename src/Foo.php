<?php

class Foo
{
    public function foo() {
        echo 'Foo';
        file_get_contents($_GET['something']);
    }

    public function baz() { }
    public function addsAnotherMethod() { }

    public function bar()
    {
        echo 'Adds another function';

        return true; // and another coding style issue
    }
}
