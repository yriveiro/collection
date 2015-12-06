<?php
namespace yriveiro\Collection;

interface CollectionInterface extends \ArrayAccess, \Countable, \IteratorAggregate
{
    public function set($key, $value = null);

    public function get($key, $default = null);
    public function all();
    public function keys();
    public function match($pattern);
    public function getIterator();

    public function remove($key);
    public function clear();

    public function has($key);
    public function isEmpty();
    public function count();
}
