<?php

class View
    /*implements Iterator*/
{
    protected $data = [];

    public function __set($key, $value){
        $this->data[$key] = $value;
    }

    function writeData($name, $value)
    {
        $this->data[$name] = $value;
    }

    function display($template, $path)
    {
        foreach($this->data as $key => $value){
            $$key = $value;
        }
        include $path . $template;
    }

/*
    public $dasa = ['Dalamalama', 'Taparasaka', 'Keruticuco', 'Beliminimimga', 'Eremekelinito'];
    public $pos = 0;

    public function current(){
        return $this->dasa[$this->pos];
    }
    public function key(){
        return $this->pos;
    }
    public function next(){
        ++$this->pos;
    }
    public function rewind(){
        $this->pos = 0;
    }
    public function valid(){
        return isset($this->dasa[$this->pos]);

    }
*/
}