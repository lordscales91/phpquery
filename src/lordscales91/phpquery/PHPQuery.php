<?php

namespace lordscales91\phpquery;

class PHPQuery implements \ArrayAccess {
    
    /**
     * An instance of a DOM object to work with
     */
    private $doc;
    
    /**
     * Subset of elements in the query
     */
    private $elements = array();
    
    public function __construct($data) {
        
        $doc = null;
        if (is_string($data)) {
            $doc = new \DOMDocument();
            $doc->loadHTML($data);
        } else if($data instanceof \DOMDocument) {
            $doc = $data;
        }
        $this->doc = $doc;
    }
    
    public function q($selector) {
        
    }
    
    // Array access to the elements
    
    public function offsetGet($offset) {
        return isset($this->elements[$offset])?$this->elements[$offset]:null; 
    }

    public function offsetExists($offset) {
        return isset($elemens[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->elements[$offset]);
    }

    public function offsetSet($offset, $value) {
        $this->elements[$offset] = $value;
    }
}

$p = new PHPQuery('<h1>Heelo</h1>');
