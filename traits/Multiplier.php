<?php
trait Multiplier
{
    public function multiply($value = 1)
    {
        parent::setCount(parent::getCount() * intval($value));
    }
}