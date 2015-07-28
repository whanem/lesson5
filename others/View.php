<?php

class View
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
}