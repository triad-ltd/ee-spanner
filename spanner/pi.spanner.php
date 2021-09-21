<?php

class Spanner
{
    public $return_data;
    public function __construct($str = '')
    {
        $expression = "/(@)([a-zA-Z0-9\-]+)(@)(.*)(@@)/mU";
        $replacement = '<span class="${2}">${4}</span>';

        $str = ($str == '') ? ee()->TMPL->tagdata : $str;

        $replaced = preg_replace($expression, $replacement, $str);
        $matched = preg_match($expression, $str, $matches);

        $this->return_data = $replaced;
    }
}