<?php
require_once './interfaces/IIncrementor.php';
require_once './traits/Multiplier.php';

class Incrementor implements IIncrementor
{
    private $count;
    public function __construct($intital = 0)
    {
        $this->count = $intital;
    }
    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
    public function getCount()
    {
        return $this->count;
    }
    public function setCount($newVal)
    {
        return $this->count = $newVal;
    }
}
class ExtendedIncrementor extends Incrementor
{
    use Multiplier;
    public function __construct($intital = 0)
    {
        parent::__construct($intital);
    }
}






