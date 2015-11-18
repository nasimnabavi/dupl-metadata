<?php

class Foo
{
    public function foo() {
        echo 'Foo';
        
        echo $_GET['something'];
    }

    public function baz() { }
    public function addsAnotherMethod() { }

    public function bar()
    {
        echo 'Adds another function';
        file_get_contents($_GET['something']);
        return true; // and another coding style issue
    }
}
