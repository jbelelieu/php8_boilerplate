<?php

/**
 * Dump Die function for outputting debugging information.
 */
if (! function_exists('dd')) {
    function dd()
    {
        foreach (func_get_args() as $x) {
            dump($x);
        }

        die;
    }
}
