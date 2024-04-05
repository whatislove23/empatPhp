<?php
function isPalindrome($string)
{
    $lowerString = strtolower($string);
    return $lowerString === implode("", array_reverse(str_split($lowerString)));
}


