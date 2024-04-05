<?php
interface IIncrementor
{
    public function __construct();
    public function increment();
    public function decrement();
    public function getCount();
    public function setCount($newVal);
}
