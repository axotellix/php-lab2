
<?php

    // [ VARIABLES ]
    $lower_bound = 10;
    $upper_bound = 20;

    $offset = 10;
    $step = 1;

    $x = $lower_bound - $offset;
    

    // [ FUNCTIONS ]
    function F( $get_arg = false ) {
        global $x, $lower_bound, $upper_bound, $offset, $step;

        for($x; $x <= $upper_bound + $offset; $x += $step) {

            switch( $x ) {
                case ($x <= $lower_bound) && ($x != 5):
                    $val = 6;
                    $res = "f($x) = $val";
                    yield $get_arg ? [$x, $val] : $res;
                    break;
                case 5:
                    $val = 'not defined';
                    $res = "f($x) = $val";
                    yield $get_arg ? [$x, $val] : $res;
                    break;
                case ($x > $lower_bound) && ($x < $upper_bound):
                    $val = ($x ^ 2 - 1) * $x + 7;
                    $res = "f($x) = $val";
                    yield $get_arg ? [$x, $val] : $res;
                    break;
                default:
                    $val = $x * 4 + 5;
                    $res = "f($x) = $val";
                    yield $get_arg ? [$x, $val] : $res;
                    break;
            }

        }        
    }

?>