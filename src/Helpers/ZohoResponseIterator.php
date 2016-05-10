<?php

namespace Mjmarianetti\Zoho\Helpers;

use GuzzleHttp\Client;
use Exception;
use Iterator;

class ZohoResponseIterator implements Iterator {
    private $position = 0;
    private $array;

    //  $it = new ZohoResponseIterator($response->response->result->RESOURCE->row);
    public function __construct(array $array) {
        $this->array = $array;
        $this->position = 0;
    }

    function rewind() {
        $this->position = 0;
    }

    function current() {
        return $this->array[$this->position]->FL;
    }

    function key() {
        return $this->position;
    }

    function next() {
        ++$this->position;
    }

    function valid() {
        return isset($this->array[$this->position]) && isset($this->array[$this->position]->FL);
    }
}
