<?php

// echo phpinfo();

const START = 1;
const END = 100;

final class MyClass{

    static function showList($start = START, $end = END){

        $i = $start;

        while($i < $end){

            switch(true){

                case($i % 15 == 0):
                    echo 'Linianos <br>';
                    break;
                case($i % 5 == 0):
                    echo 'IT <br>';
                    break;
                case($i % 3 == 0):
                    echo 'Linio <br>';
                    break;
                default:
                    echo $i, '<br>';
                    break;
            }

            $i++;
        }
    }
}

MyClass::showList(101, 200);