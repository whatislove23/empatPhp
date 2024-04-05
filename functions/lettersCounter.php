<?php
function letterCounter($string)
{
    $leters = str_split(str_replace(" ", "", $string));
    $result = array();
    foreach ($leters as $leter) {
        if (array_key_exists($leter, $result)) {
            $result[$leter] = $result[$leter] + 1;
        } else {
            $result[$leter] = 1;
        }
    }
    return $result;
}

