<?php

class View
    implements Iterator
{
    protected $data = [];

//    public function assign($name, $value){
//        $this->data[$name] = $value;
//    }

    public  function __set($k, $v){
        $this->data[$k] = $v;
    }

    public  function __get($k){
        return $this->data[$k];
    }
    public function display($template){
        foreach ($this->data as $key => $val ) {
            $$key = $val;
        }
        include_once __DIR__ . '/../views/' . $template;
    }

    public function current()
    {
        return current($this->data);
    }

    public function next()
    {
        next($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function valid()
    {
      return isset($this->data[$this->key()]);
    }

    public function rewind()
    {
        reset($this->data);
    }
}