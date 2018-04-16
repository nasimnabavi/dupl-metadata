<?php

class TestIssues{




    public function foo(string $str) {
        /* @var string $barReturn **/
        $barReturn = $this->bar($str);

        return $barReturn;
    }

    /* @return null|string **/
    public function bar($tmp) {

        if ($tmp) {
            return null;
        } else {
            return "str";
        }
    }

    //////////
}
