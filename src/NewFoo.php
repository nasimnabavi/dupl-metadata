<?php

class NewFoo
{
    public function foo(){echo 'Foo';

        file_get_contents($_GET['something']);
    }
    public function fooDupl() {

        $b = true;
        if ($b) {echo "hi";}

        echo 'Foo';




        file_get_contents($_GET['something']);
    }
    public function baz() {

    }

    public function bazAdded() {}
    public function bar()
    {
        return true; // and another coding style issue
    }
}
