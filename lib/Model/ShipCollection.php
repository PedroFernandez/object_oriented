<?php

namespace Model;

use Traversable;

class ShipCollection implements \ArrayAccess, \IteratorAggregate
{
    private $ships;

    public function __construct($ships)
    {
        $this->ships = $ships;
    }

    public function offsetExists($offset)
    {
        return key_exists($offset, $this->ships);
    }

    public function offsetGet($offset)
    {
        return $this->ships[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->ships[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->ships[$offset]);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->ships);
    }

    public function removeAllBrokenShips()
    {
        foreach ($this->ships as $key => $value) {
            if (!$this->ships[$key]->isFunctional()) {
                unset($this->ships[$key]);
            }
        }
    }
}