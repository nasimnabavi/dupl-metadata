<?php

class Foo
{
    public function foo() {
        echo 'Foo';
        
        file_get_contents($_GET['something']);
    }
    public function fooDupl() {
        
        
        
        
        echo 'Foo';
        
        file_get_contents($_GET['something']);
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
