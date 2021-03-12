<?php

    trait hello{
        public function sayhello(){
            echo "Hello Everyone";
        }
    }

    trait bye{
        public function saybye(){
            echo "Bye Bye everyone";
        }
    }

    class base{
        use hello, bye;
    }
    class base2{
        use hello;
    }
    $test = new base();
    $test2 = new base();
    $test->sayhello();
    $test2->saybye();
