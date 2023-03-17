<?php
function debug()
{
    $bt = debug_backtrace();
    $caller = array_shift($bt);
    if (DEBUG):
        $args = func_get_args();
        array_walk_recursive($args, function (&$v) {
            if (!is_object($v)):
                $v = htmlspecialchars($v);
            endif; });
        echo '<pre style="box-shadow: 2px 2px 4px 0px gray; display: flex; flex-direction: column;border-radius: 5px">';
        echo ('<label style="padding: 2px;border-left: 2px solid crimson;background-color:white;border-radius: 5px 5px 0 0;">&#10095; ' . $caller['file'] . ": " . $caller['line'] . "</label><br/>");
        echo ('<div style="background-color: #2b2b2b; color: white; padding: 5px;">');
        foreach ($args as $arg):
            var_dump($arg);
        endforeach;
        echo '<div></pre>';

    endif;
}